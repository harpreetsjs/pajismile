  var cache = {}
  
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');

    if (response.status === 'connected') {
      startGame();
    } else if (response.status === 'not_authorized') {
      console.log('not_authorized');
    } else {
      console.log('Needs to login');  
    }
  }

  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  function startGame(type) {
    FB.api('/me',{ fields: 'id,name,gender,first_name'}, function(response) {
        if(response){
          var url =   "/php/ImageApp.php?name="+response.first_name+"&profileid="+response.id+"&gender="+response.gender+"&type="+window.type; 
      //    console.log(url);      
          $.get(url, function( data ) {
            if(data && data == 'error'){
               console.log('error received'); 
            }else if(data){
             // console.log('Data received '+JSON.stringify(data));
              //shareResults('http://pajismile.in/'+''+ data);
              cache.url = 'http://pajismile.in/'+''+ data;
              $('#baba-reply').modal('show');
              var babaImg = $('#baba-img-placement');
              if(babaImg.length > 0){
                babaImg.attr('src', cache.url);
              }else{
                var img = $('<img />', { 
                id: 'baba-img-placement',
                class:'img-responsive',
                src: cache.url
                });
             
                img.appendTo('.result-placement');           

              } 
            }

          });
        }
    });
  }


  function shareResults(url){
    var receivedUrl = url;
   // console.log('url 1st '+receivedUrl);
    $('#baba-reply').modal('hide');
    if(!receivedUrl){
      receivedUrl = cache.url;
    }
       console.log('url 2nd '+receivedUrl);
    if(window.type == 2) {
      FB.ui({         
      method: 'feed',
      link: 'http://pajismile.in/php/dhinchak-pooja.php',
      picture:  receivedUrl,
      title: 'Which lines does Dhinchak Pooja wants to say to you?',
      caption: 'Dhinchak Pooja: A look at the new Internet phenomenon of cringe-pop',
      }, function(response){
        $('#thank-you').modal('show');
      });
    } else {
      FB.ui({         
      method: 'feed',
      link: 'http://pajismile.in/php/baba-says.php',
      picture:  receivedUrl,
      title: 'What Om Swami Maharaj know\'s about you?',
      caption: 'Om Swami is a social, religious and political leader. He has a PhD in astrology. He also claims of devoting his life to serving the country and its people.',
      }, function(response){
        $('#thank-you').modal('show');
      });
    }
    
    
  }


   function shareFoodieResults(url){
    var receivedUrl = url;
  //  console.log('url 1st '+receivedUrl);
    $('#baba-reply').modal('hide');
    if(!receivedUrl){
      receivedUrl = cache.url;
    }
 //       console.log('url 2nd '+receivedUrl);
    FB.ui({         
    method: 'feed',
    link: 'http://pajismile.in/php/foodie.php',
    picture:  receivedUrl,
    title: 'Which Indian food business you should start in US?',
    caption: 'So do you plan to start your own food business? Get experts views on it',
    }, function(response){
      $('#thank-you').modal('show');
    });
    
  } 
  
function getUserDetails(){
  var results;

  return results;
}


function startFoodieApp(){
  FB.getLoginStatus(function(response) {

    if(response && response.status === 'connected'){
      FB.api('/me',{ fields: 'id,name,gender,first_name,picture.type(normal)'}, function(response) {
        if(response){
       //    console.log(JSON.stringify(response));
            $.ajax({
              url: '/php/getFoodieResult.php',
              type: 'post',
              dataType: 'json',
              success: function (data) {
                  if(data && data == 'error'){
                     console.log('error received'); 
                  }else if(data){
              //      console.log('Data received '+JSON.stringify(data));
                    //shareResults('http://pajismile.in/'+''+ data);
                    cache.url = 'http://pajismile.in/'+''+ data.imgUrl;
                    $('#baba-reply').modal('show');
                    var babaImg = $('#baba-img-placement');
                    if(babaImg.length > 0){
                      babaImg.attr('src', cache.url);
                    }else{
                      var img = $('<img />', { 
                      id: 'baba-img-placement',
                      class:'img-responsive center-block',
                      src: cache.url
                      });
                   
                      img.appendTo('.result-placement');           

                    } 
                  }
              },
            data: JSON.stringify(response)
            });
        }
      });
    }else{
      console.log('Logged in issue or unauthorized user');
    }
  });

}


  window.fbAsyncInit = function() {
    debugger;
  FB.init({
    appId      : '579755062222884',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.8' // use graph api version 2.8
  });


  FB.api(
    "/1168946259857433/feed",
    function (response) {
      if (response && !response.error) {
        debugger;
        console.log(response);
      }
    }
);

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
