var menuBtn = document.getElementsByClassName('menu-btn')
var mobileMenu = document.getElementsByClassName('mobile-menu')
var clickedBtn = function() {
  mobileMenu[0].classList.toggle('active');
}

menuBtn[0].addEventListener('click', clickedBtn);

console.log(menuBtn[0]);

/*----------------Testimonials---------------*/

//import these functions from library
import{
  html,
  render
} from 'https://unpkg.com/lit-html?module';

var postData =[];
var postImages =[];

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

    // get all thoses links together 
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
      }));

  })
