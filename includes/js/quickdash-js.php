<script type="text/javascript">

document.addEventListener('DOMContentLoaded', function() {

    var body = document.body;
    var my_bp_username = "<?php echo bp_core_get_username( bp_loggedin_user_id() ); ?>";
    var homeurl = "<?php echo home_url(); ?>";
    var wrap = document.createElement('div');
    wrap.id = "crap";
    wrap.className = "animwrap";
    // body.style.overflow = "auto";
    // var bigwrap = document.getElementById('homedashmain');

    document.getElementById('buddypress').appendChild(wrap);

    var dashbtn =  document.createElement('a');
    dashbtn.className = "btn btn-small";
    dashbtn.style.margin = "20px 0 11px";
    dashbtn.innerHTML += '<i class="fa fa-angle-left"></i> &nbsp;Dashboard';

    var sw_settings = document.getElementById('my-settings');
    sw_settings.href = "#settings";

    var sw_editp = document.getElementById('edit-my-profile');
    sw_editp.href = "#edit-profile";

    // var side_editp = document.getElementById('edit-my-profile-side');
    // side_editp.href = "#edit-profile";
    //
    // var side_settings = document.getElementById('my-settings-side');
    // side_settings.href = "#settings";

    // var view_profile = document.getElementById('view-my-profile');
    // view_profile.href = "#view-profile";



    // function getSettings( url ) {
    //     var xhttp = new XMLHttpRequest();
    //     xhttp.open( "GET", url, true );
    //     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    //     xhttp.onreadystatechange = function() {
    //     if ( xhttp.readyState == 4 ) {
    //         if( xhttp.status == 200 ) {
    //             var profile_data = this.responseText;
    //             var trim_profile_data = profile_data.substring( profile_data.indexOf("<div id='item-body"), profile_data.indexOf("<!-- #item-body -->"));
    //             // getMessages();
    //

    //
    //
    //         }
    //     }
    // };
    // xhttp.send();
    // }
    // getSettings( "http://localhost:8888/testing/members/" + my_bp_username + "/settings/" );



    function getSettings( url ) {
        var xhttp = new XMLHttpRequest();
        xhttp.open( "GET", url, true );
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.onreadystatechange = function() {
        if ( xhttp.readyState == 4 ) {
            if( xhttp.status == 200 ) {
                var profile_data = xhttp.responseText;
                var trim_profile_data = profile_data.substring( profile_data.indexOf('<!-- startbpcontent -->'), profile_data.indexOf('<!-- endbpcontent -->') );
                sw_settings.addEventListener("click", function() {
                    body.style.overflow = "hidden";
                    wrap.className += " settings bp-user my-account";
                    wrap.style.right = "0";
                    wrap.innerHTML = trim_profile_data;
                    wrap.insertBefore(dashbtn, wrap.firstChild);
                    console.log(trim_profile_data);
                    dashbtn.addEventListener("click", function() {
                      wrap.style.right = "-110%";
                      console.log(trim_profile_data);
                      body.style.overflow = "auto";
                    });

                });

                // side_settings.addEventListener("click", function() {
                //     bigwrap.className += " settings bp-user my-account";
                //     bigwrap.innerHTML = trim_profile_data;
                //     console.log(trim_profile_data);
                // });

            }
        }
    };
    xhttp.send();
    }
    getSettings( homeurl + "/members/" + my_bp_username + "/settings/" );


    function getEditP( url ) {
        var xhttp = new XMLHttpRequest();
        xhttp.open( "GET", url, true );
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.onreadystatechange = function() {
        if ( xhttp.readyState == 4 ) {
            if( xhttp.status == 200 ) {
                var profile_data = this.responseText;
                var trim_profile_data = profile_data.substring( profile_data.indexOf('<!-- startbpcontent -->'), profile_data.indexOf('<!-- endbpcontent -->'));
                // getMessages();
                console.log(trim_profile_data);
                sw_editp.addEventListener("click", function() {
                    body.style.overflow = "hidden";
                    wrap.className += " bp-user my-account xprofile profile my-profile edit ";
                    wrap.style.right = "0";
                    wrap.innerHTML = trim_profile_data;
                    wrap.insertBefore(dashbtn, wrap.firstChild);

                    dashbtn.addEventListener("click", function() {
                      wrap.style.right = "-110%";
                      body.style.overflow = "auto";
                    });
                });

                // view_profile.addEventListener("click", function() {
                //     bigwrap.className += " bp-user my-account xprofile profile my-profile public ";
                //     bigwrap.innerHTML = trim_profile_data;
                //     console.log(trim_profile_data);
                // });


            }
        }
    };
    xhttp.send();
    }
    getEditP( homeurl + "/members/" + my_bp_username + "/profile/edit/group/1/" );


    // XHTTP Request for Edit Profile page; returned as JSON //
    // function getEditP( url ) {
    //     var xhttp = new XMLHttpRequest();
    //     xhttp.open( "GET", url, true );
    //     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    //     xhttp.onreadystatechange = function() {
    //     if ( xhttp.readyState == 4 ) {
    //         if( xhttp.status == 200 ) {
    //             var profile_data = this.responseText;
    //             var trim_profile_data = profile_data.substring(profile_data.indexOf('<!--#bpcontent-->'), profile_data.indexOf('<!--/#bpcontent-->'));
    //             // getMessages();
    //             console.log(trim_profile_data);
    //             sw_editp.addEventListener("click", function() {
    //                 wrap.className += " edit profile xprofile my-profile bp-user my-account";
    //                 wrap.style.right = "0";
    //                 wrap.innerHTML = trim_profile_data;
    //                 wrap.insertBefore(dashbtn, wrap.firstChild);
    //
    //                 dashbtn.addEventListener("click", function() {
    //                   wrap.style.right = "-110%";
    //                 });
    //             });
    //
    //             // side_editp.addEventListener("click", function() {
    //             //     bigwrap.className += " edit profile xprofile my-profile bp-user my-account";
    //             //     bigwrap.innerHTML = trim_profile_data;
    //             //     console.log(trim_profile_data);
    //             // });
    //
    //
    //         }
    //     }
    // };
    // xhttp.send();
    // }
    // getEditP( homeurl + "/members/" + my_bp_username + "/profile/edit/group/1/" );



    // XHTTP Request for Edit Profile page; returned as JSON //
    // function getProfile( url ) {
    //     var xhttp = new XMLHttpRequest();
    //     xhttp.open( "GET", url, true );
    //     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    //     xhttp.onreadystatechange = function() {
    //     if ( xhttp.readyState == 4 ) {
    //         if( xhttp.status == 200 ) {
    //             var profile_data = this.responseText;
    //             var trim_profile_data = profile_data.substring( profile_data.indexOf('<div id="homedashmain'), profile_data.indexOf('<!-- #homedashmain -->'));
    //             // getMessages();
    //             console.log(trim_profile_data);
    //             view_profile.addEventListener("click", function() {
    //                 wrap.className += " bp-user my-account xprofile profile my-profile public ";
    //                 wrap.style.right = "0";
    //                 wrap.innerHTML = trim_profile_data;
    //                 wrap.insertBefore(dashbtn, wrap.firstChild);
    //
    //                 dashbtn.addEventListener("click", function() {
    //                   wrap.style.right = "-110%";
    //                 });
    //             });

                // view_profile.addEventListener("click", function() {
                //     bigwrap.className += " bp-user my-account xprofile profile my-profile public ";
                //     bigwrap.innerHTML = trim_profile_data;
                //     console.log(trim_profile_data);
                // });


    //         }
    //     }
    // };
    // xhttp.send();
    // }
    // getProfile( "http://localhost:8888/testing/members/" + my_bp_username + "/" );




});

</script>
