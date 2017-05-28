  var cache = {}
  
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);

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

  function startGame() {
    FB.api('/me',{ fields: 'id,name,gender,first_name'}, function(response) {
      console.log('Successful login for: ' + response.name);
      console.log(response);
        if(response){
          var url = "php/ImageApp.php?name="+response.first_name+"&profileid="+response.id+"&gender="+response.gender; 
          console.log('Url '+url);
          $.get(url, function( data ) {
            if(data && data == 'error'){
               console.log('error received'); 
            }else if(data){
              console.log('Data received '+JSON.stringify(data));
              shareResults(window.location+''+ data);            
            }

          });
        }
    });
  }


  function shareResults(url){
    FB.ui({
    method: 'feed',
    link: 'http://pajismile.in/fbapp',
    picture:  url,
    title: 'What Om Swami Maharaj know\'s about you?',
    caption: 'Om Swami is a social, religious and political leader. He has a PhD in astrology. He also claims of devoting his life to serving the country and its people.',
    }, function(response){
      $('#thank-you').modal('show');
    });
    
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '1883442808545503',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.8' // use graph api version 2.8
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

