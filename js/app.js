var menuBtn = document.getElementsByClassName('menu-btn')
var mobileMenu = document.getElementsByClassName('mobile-menu')
var clickedBtn = function() {
  mobileMenu[0].classList.toggle('active');
}

menuBtn[0].addEventListener('click', clickedBtn);

console.log(menuBtn[0]);

/*----------------Testimonials---------------*/

//import these functions from lit-html library
import{
  html,
  render
} from 'https://unpkg.com/lit-html?module';

//global array to hold json data
var postData =[];
//global array to hold json images
var postImages =[];

//global function returns photo that matches id
var findImageById = function(id){
  //returns array with that matches id
  var matchImage = postImages.filter((photo) => photo.id == id)

  return matchImage[0].image
}


//gets data from json link alreadt provided by wordpress
axios.get('/wp-json/wp/v2/testimonials')
  .then(function(response){
    var postIds = [];
    // 'response' only return if conection was good === (200), '.data' is used to return data in object
    postData = response.data;
    //loop over all post, get the id of each and push to 'postIds' array 
    postData.map((item)=> postIds.push(item.id));
    //get link or route for image 1
    function getImage0(){
      return axios.get('/wp-json/wp/v2/media?parent=' + postIds[0]);
    };
    //get link or route for image 2
    function getImage1(){
      return axios.get('/wp-json/wp/v2/media?parent=' + postIds[1]);
    };
    //get link or route for image 3
    function getImage2(){
      return axios.get('/wp-json/wp/v2/media?parent=' + postIds[2]);
    };

    // get all thoses links image together 
    axios.all([getImage0(),getImage1(),getImage2()])
    // "image0,image1,image2" are all named "response" 
      .then(axios.spread(function(image0, image1 ,image2){
        //push neded data from image 1 to postImages array
        postImages.push({
          id: postIds[0],
          image: image0.data[0].media_details.sizes.full.source_url
        });
        //push neded data from image 2 to postImages array
        postImages.push({
          id: postIds[1],
          image: image1.data[0].media_details.sizes.full.source_url
        });
        //push neded data from image 3 to postImages array
        postImages.push({
          id: postIds[2],
          image: image2.data[0].media_details.sizes.full.source_url
        });
        console.log(postImages);
        initApp(response);
      }))
      .catch(function(error){
        //handle error
        console.log(error);
      })
  })
  .catch(function(error){
    //handle error
    console.log(error);
  })

  //initialization or start of application
  var initApp = function (data) {
    let testimonialsData = data.data;

    // custom array function
    Array.prototype.swap = function(x,y){
      var b = this[x]
      this[x] = this[y]
      this[y] = b
      return this
      /*
      e.g how function "swap" works
      var s = [1,2,3];
      s.swap(1,3);
      output is [3,2,1]
      */
    }

    //Swap postion of postData and Rerender it to view
    let clickedLeft = function () {
      postData.swap(1,0);
      render(appTemplate(postData),
      document.getElementById('testimonials-app')
      )}

      //Swap postion of postData and Rerender it to view
      let clickedRight = function () {
        postData.swap(1,2);
        render(appTemplate(postData),
        document.getElementById('testimonials-app')
        )}

        //returns text within the passed data
        function decodeEntities(encodedString){
          let div = document.createElement('div');
          div.innerHTML = encodedString;
          return div.textContent;
        }

    //'html' is from lit-html library, makes you use html like jsx in react
    //@clicked is from lit-html library
    const appTemplate = ()=> html `
    <div class="testimonials-container">
      <div class="test-sides test-left" @click=${(e) => clickedLeft()}>
        <div class="person-img" style="background: url('${findImageById(testimonialsData[0].id)}');">
          <div class="hover-bg">
            <div class="name">${testimonialsData[0].fname}</div>
          </div>
        </div>
      </div>
      <div class="test-center">
        <div class="header">
          <div class="user-img" style="background: url('${findImageById(testimonialsData[1].id)}');">

          </div>
          <div class="info">
            <h4>${testimonialsData[1].fname}</h4>
            <span>${testimonialsData[1].user_title}</span>
          </div>
        </div>
        <p>
        ${decodeEntities(testimonialsData[1].content.rendered)}
        </p>
      </div>
      <div class="test-sides test-right" @click=${(e) => clickedRight()}>
        <div class="person-img" style="background: url('${findImageById(testimonialsData[2].id)}');">
          <div class="hover-bg">
            <div class="name">${testimonialsData[2].fname}</div>
          </div>
        </div>
      </div>
    </div>
    `
    //'render' is from lit-html library makes you show html as in react
    render(appTemplate(postData), document.getElementById('testimonials-app'))
  }
