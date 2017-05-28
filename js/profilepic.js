
function getProfilepicture(profileId){
	FB.api(
    profileId+"/picture?height=100",
    function (response) {
      if (response && !response.error) {
         var url = '/php/imagemerge.php?url='+encodeURIComponent(response.data.url);
         $.get(url, function( data ) {
         	console.log(data);
         });
      }
    }
);
}

function statusChangeCallback2(response) {
    if (response.status === 'connected') {
	 FB.api('/me',{ fields: 'id,name,gender,first_name'}, function(response) {
	 	      getProfilepicture(response.id);
	 });

    } else if (response.status === 'not_authorized') {
      console.log('not_authorized');
    } else {
      console.log('Needs to login');  
    }
}

  function checkstate() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback2(response);
    });
  }

