<?php
 //sending mail
 if(isset($_POST['sub']))
 {
   $bname=$_POST['bname']; 
   $rname=$_POST['rname']; 
   $tp=$_POST['tp'];
   $qh=$_POST['qh'];
   $px=$_POST['px'];
   $lhkd=$_POST['lhkd'];
   $address=$_POST['address'];
   $message=$_POST['message'];
   if(mail($bname,$rname,$tp,$message,$qh,$px,$lhkd,$address))
   {
     echo "mail sent";
   }
   else
   {
     echo "mail failed";
   }
 }
?>

<form name="frm" method="post" action="#">
 <label for="uname">Name:</label>
 <input type="text" value="" name="uname" id="uname"><br/>
 <label for="mailid">Email:</label>
 <input type="text" value="" name="mailid" id="mailid"><br/>
 <label for="mobile">Phone:</label>
 <input type="text" value="" name="phone" id="phone"><br/>
 <label for="message">Message:</label>                                   
 <input type="text" value="" name="message" id="message"><br/>
 <input type="submit" value="Submit" name="sub" id="sub">
</form>

<form class="contact-form " method="post" action="#">
      <input class="biginput" type="text" id="bname" name="bname" placeholder="Tên cửa hàng/ thương hiệu">
      <input class="gutter" type="text" id="rname" name="rname" placeholder=" Tên người đại diện " style="clear: both; margin: 0px; margin-right: 2.5%;">
      <select class="gutter" id="city"  id="tp" name="tp" aria-label=".form-select-sm"  >
        <option value="" selected>Chọn tỉnh thành</option>           
      </select>
      <select class="gutter" id="district"  id="qh" name="qh" aria-label=".form-select-sm"  >
        <option value="" selected>Chọn quận huyện</option>
      </select>
      <select class="gutter" id="ward"  id="px" name="px" aria-label=".form-select-sm"  >
        <option value="" selected>Chọn phường xã</option>
      </select>
  <select id="lhkd" name="lhkd" class="biginput">
    <option value="" selected>Loại hình kinh doanh </option>
    <option value="">Quan 1 </option>
    <option value="">Quan 1 </option>
</select>     

<input class="biginput" type="text" id="address" name="address" placeholder="Địa chỉ">

      <textarea name="message" id="message" placeholder="Lời nhắn"></textarea>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="favicon.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Minimum Design</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href='https://fonts.googleapis.com/css?family=Public Sans' rel='stylesheet'>
  <link rel="stylesheet" href="style.css">
  <script src="https://smtpjs.com/v3/smtp.js"></script>
</head> 

<body>
  <header>
    <div class="container" style=" z-index: 50; ">
      <a href="#"><img src="https://brandlogos.net/wp-content/uploads/2020/09/react-logo-512x512.png" 
        style="position: absolute; top: 10px; max-width: 40px;" /></a>
      <nav>
        <ul role="list">
          <li> 
            <button class="button" style="border-radius: 8px; background-color: #7635dc ;   box-shadow:none; margin: 10px;   
                ">Buy Now </button>  
          </li>
          <li style="  padding: 14px 16px;          "><a href="#news">Documents</a></li>





          <li class="dropdown" style="  padding: 14px 16px;          ">
            <a href="#dd" class="dropbtn">Pages</a>
            <div class="dropdown-content-c  " style="bottom: px;">
              <div class="dropdown-content-cc ">
        
        
        
                
                <div class="dropdown-content-w" style="flex-basis: 16.6%;">
                  <ul class=" ddss " style="margin:0 ;">
                    <li class="ddw ">
                      
                      <div class="dashc">
                        <span class="dash"></span>
                      </div>
                      "Other" </li>
        
        
        
        
                    <li class="ddw">
                      <a href="" class="css-kggivz ">
                        <div class="dashc">
                          <span class="dash "></span>
                        </div >
                        About</li>
                      </a>
        
        
        
                      <li class="ddw">
                        <a href="" class="css-kggivz">
                          <div class="dashc">
                            <span class="dash"></span>
                          </div>
                          About</li>
                        </a>
                        <li class="ddw">
                          <a href="" class="css-kggivz">
                            <div class="dashc">
                              <span class="dash"></span>
                            </div>
                            About</li>
                          </a>
                          <li class="ddw">
                            <a href="" class="css-kggivz">
                              <div class="dashc">
                                <span class="dash"></span>
                              </div>
                              About</li>
                            </a>
                            <li class="ddw">
                              <a href="" class="css-kggivz">
                                <div class="dashc">
                                  <span class="dash"></span>
                                </div>
                                About</li>
                              </a>
                              <li class="ddw">
                                <a href="" class="css-kggivz">
                                  <div class="dashc">
                                    <span class="dash"></span>
                                  </div>
                                  About</li>
                                </a>
                                <li class="ddw">
                                  <a href="" class="css-kggivz">
                                    <div class="dashc">
                                      <span class="dash"></span>
                                    </div>
                                    About</li>
                                  </a>
                  </ul>
                </div>
        
                <div class="dropdown-content-w" style="flex-basis: 16.6%;">
                  <ul class="ddss">
                    <li class="ddw">
                      <div class="dashc">
                        <span class="dash"></span>
                      </div>
                      "Other" </li>
                      <li class="ddw">
                        <a href="" class="css-kggivz ">
                          <div class="dashc">
                            <span class="dash "></span>
                          </div >
                          About</li>
                        </a>
                        <li class="ddw">
                          <a href="" class="css-kggivz ">
                            <div class="dashc">
                              <span class="dash "></span>
                            </div >
                            About</li>
                          </a>
                          <li class="ddw">
                            <a href="" class="css-kggivz ">
                              <div class="dashc">
                                <span class="dash "></span>
                              </div >
                              About</li>
                            </a>
                            <li class="ddw">
                              <a href="" class="css-kggivz ">
                                <div class="dashc">
                                  <span class="dash "></span>
                                </div >
                                About</li>
                              </a>
                  </ul>
                  </div>
                <div class="dropdown-content-w" style="flex-basis: 16.6%;">
                  <ul class="ddss">
                    <li class="ddw">
                      <div class="dashc">
                        <span class="dash"></span>
                      </div>
                      "Other" </li>
                      <li class="ddw">
                        <a href="" class="css-kggivz ">
                          <div class="dashc">
                            <span class="dash "></span>
                          </div >
                          About</li>
                        </a>
                        <li class="ddw">
                          <a href="" class="css-kggivz ">
                            <div class="dashc">
                              <span class="dash "></span>
                            </div >
                            About</li>
                          </a>
                          <li class="ddw">
                            <a href="" class="css-kggivz ">
                              <div class="dashc">
                                <span class="dash "></span>
                              </div >
                              About</li>
                            </a>
                                <li class="ddw">
                      <a href="" class="css-kggivz ">
                        <div class="dashc">
                          <span class="dash "></span>
                        </div >
                        About</li>
                      </a>
                  </ul>
                </div>
                <div class="css-iol86l " style="flex-basis: 50%;">
                  <ul class=" ddss">
                    <li class="ddw">
                      <div class="dashc">
                        <span class="dash"></span>
                      </div>
                      "Dashboard" </li>
        
        
                      <li class="css-6laylv ">
                        <a href="" class="css-kggivz">
                          <button class="css-1crbxsj css-6laylv"  tabindex="0" type="button"> 
                            <img src="https://minimals.cc/assets/illustrations/illustration_dashboard.png" alt="" class="ddi" style="transform: none;">
                            <span class="css-jo3ec3"></span>
                            <span class="css-w0pj6f"></span>
                          </button>
                        </a>
                      </li>
                  </ul>
                </div>
              </div> 
              
            </div>
          </li>









          <li style="  padding: 14px 16px;
          "><a href="#contact" style="border-radius: 8px;">Compoment</a></li>
          <li style="  padding: 14px 16px;
"><a href="#home" style="color: #7635dc;">Home</a></li>

        </ul>
      </nav>
    </div>

  </header>

<main>
    

<div class="container  ">



    <div class="sidebar " style="gap:1em;">

      <div class="sidebar2  ">
        <div class="textc2 " >
          <h1 class="fs-primary-heading fw-bold " style=" text-align: left; align-self: start; margin-bottom: 20px; font-size: 56px;">Start a
           <br> new project
           <br> with <span style="color:blueviolet ;"> Minimal </span></h1>
          <p class="" style=" text-align: left; margin-bottom: 20px;">The starting point for your next project based on easy-to-customize<br> MUI helps you build apps faster and better. </p>
            
          
                <div class="inlinediv" style=" margin: 10px;">

                  <div class='container2'>
                    <div>
                        <img src='https://minimal-assets-api.vercel.app/assets/images/home/ic_figma_small.svg' class='iconDetails'>
                    </div>  
                <div style='margin-left:30px;'>
                <a href="" class="" style="color: white;"><h4>Figma</h4></a>
                </div>
                   </div>
    
                  <div class='container2'>
                    <div>
                        <img src='https://minimal-assets-api.vercel.app/assets/images/home/ic_sketch_small.svg' class='iconDetails'>
                    </div>  
                <div style='margin-left:30px;'>
                <a href="" class="" style="color: white;"><h1>Figma</h1></a>
                </div>
                   </div>
                </div>
               

                

                <button class="button" style="border-radius: 8px; background-color: #7635dc ;   box-shadow:none; margin-bottom: 20px; margin-top: 20px; 
                ">Get Started</button>
                <h1>Abiable for :</h1>

                <div class="container">

                  <div class="gallery">
                      <img src="https://minimal-assets-api.vercel.app/assets/images/home/ic_sketch.svg" alt="Cinque Terre" >
                  </div>
                  <div class="gallery">
                    <img src="https://minimal-assets-api.vercel.app/assets/images/home/ic_figma.svg" alt="Cinque Terre" >
                </div>
                <div class="gallery">
                  <img src="https://minimal-assets-api.vercel.app/assets/images/home/ic_js.svg" alt="Cinque Terre" >
              </div>
              <div class="gallery">
                <img src="https://minimal-assets-api.vercel.app/assets/images/home/ic_ts.svg" alt="Cinque Terre" >
            </div>
            <div class="gallery">
              <img src="https://minimal-assets-api.vercel.app/assets/images/home/ic_nextjs.svg" alt="Cinque Terre" >
          </div>



                </div>
                  
              </div>
              
        </div>
        
          <div class="sidebar1 " >
            <img src="https://minimal-assets-api.vercel.app/assets/images/home/hero.png" 
          alt=" sss" class=" bgi " style="src:d;  ">    
        </div>
      </div>
            </div>
    

    <div class="container  " style="margin-top: 150px; margin-bottom: 150px;">
      <div class="container3 " >
    
        
      </div>
      <div class="MuiBox-root css-1bgbgdv  ">
        <div style="opacity: 1; transform: none;">
          <div class=" css-qq4ur7">Minimal</div>
        </div>
        <div style="opacity: 1; transform: none;">
          <h2 class=" css-92q1ff fs-primary-heading ">What minimal helps you?</h2>
        </div>
      </div>

        <div class="MuiBox-root css-u37vl ">
          <div style="opacity: 1; transform: none;">
            <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation0 MuiCard-root cardLeft css-qyaqjv">
              <span class="MuiBox-root css-187jyej">
                <span class="wrapper lazy-load-image-background blur lazy-load-image-loaded" style="color: transparent; display: inline-block;">
                  <img class="MuiBox-root css-6jrdpz" src="https://minimal-assets-api.vercel.app/assets/icons/ic_design.svg" alt="UI &amp; UX Design" sx="[object Object]"></span></span>
                  <p class="MuiTypography-root MuiTypography-h5 MuiTypography-paragraph css-1h36ie7">UI &amp; UX Design</p>
                  <p class="MuiTypography-root MuiTypography-body1 css-stgg4o">The set is built on the principles of the atomic design system. It helps you to create projects fastest and easily customized packages for your projects.</p></div></div>
                  <div style="opacity: 1; transform: none;">
                    <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation0 MuiCard-root cardCenter css-qyaqjv" style="bottom: 40px;">
                      <span class="MuiBox-root css-6gmo0i">
                        <span class="wrapper lazy-load-image-background blur lazy-load-image-loaded" style="color: transparent; display: inline-block;">
                          <img class="MuiBox-root css-6jrdpz" src="https://minimal-assets-api.vercel.app/assets/icons/ic_code.svg" alt="Development" sx="[object Object]"></span></span>
                          <p class="MuiTypography-root MuiTypography-h5 MuiTypography-paragraph css-1h36ie7">Development</p>
                          <p class="MuiTypography-root MuiTypography-body1 css-stgg4o">Easy to customize and extend each component, saving you time and money.</p></div></div>
                          <div style="opacity: 1; transform: none;"><div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation0 MuiCard-root  css-qyaqjv" style="top: 20px;">
                            <span class="MuiBox-root css-2hj2qn"><span class="wrapper lazy-load-image-background blur lazy-load-image-loaded" style="color: transparent; display: inline-block;">
                              <img class="MuiBox-root css-6jrdpz" src="https://brandlogos.net/wp-content/uploads/2020/09/react-logo-512x512.png" alt="Branding" sx="[object Object]" style="max-width: 40px"></span></span>
                            <p class="MuiTypography-root MuiTypography-h5 MuiTypography-paragraph css-1h36ie7">Branding</p>
                    <p class="MuiTypography-root MuiTypography-body1 css-stgg4o">Consistent design in colors, fonts ... makes brand recognition easy.</p>
                </div></div></div>

      </div>
    


 <div class="container " style="margin-bottom:150px ; margin-top: 150px;">
  <section class="imgcontainer ">
    <div class="flexbox">
      <div class="even-columns">
        <div class="textc">
          <h1 class="fs-primary-heading fw-bold" style=" text-align: center;">Huge pack
            of elements.</h1>
          <p style=" text-align: center;">We collected most popular elements. Menu, sliders, buttons, inputs etc. are all here. Just dive in!  .</p>
          <button class="button">Get Started</button>
        </div>
          <div class="imgwrap">
            <img src="https://minimal-assets-api.vercel.app/assets/images/home/screen_dark_1.png" 
          alt="" class="img nghien" style="z-index: 4; left: 400px; animation-delay: 300ms;">
          <img src="https://minimal-assets-api.vercel.app/assets/images/home/screen_dark_2.png" 
          alt="" class="img nghien" style="z-index: 2;left: 150px;bottom: 20px;animation-delay: 100ms">
          <img src="https://minimal-assets-api.vercel.app/assets/images/home/screen_dark_3.png" 
          alt="" class="img nghien" style="z-index: 1;left: -100px; bottom: 40px;animation-delay: 0ms">          
        </div>
      </div>
    </div>
  </section>
 </div>




<div class="container ">
  <section class="sidebar  " style="margin-top: 50px; ">
    <div class="  sidebar1 " >
      <h1 class="fs-primary-heading fw-bold">Dark Theme</h1>
      <h1 class="fs-primary-heading fw-bold">Dark Theme</h1>
      <h1 class="fs-primary-heading fw-bold">Dark Theme</h1>
  
    </div>
  
    <div class="imgwrap img sidebar2 " style="background-color:transparent; box-shadow: none;"> 
      <img src="https://minimal-assets-api.vercel.app/assets/images/home/darkmode.png" 
      alt="" class="" style="z-index: 2;left: 200px ; position: relative;  ">
      <img src="https://minimal-assets-api.vercel.app/assets/images/home/lightmode.png" 
      alt="" class="" style="z-index: 1;right: 100px ;position: relative; ;  ">
    </div>
  </section>
  
</div>



  <section class="padding-block-900 ">
    <div class="container">
      <div class="even-columns">

        <div>
          <ul class="numbered-items" role="list">
            <li>
              <h3 class="fs-600 fw-bold">Track company-wide progress</h3>
              <p>See how your day-to-day tasks fit into the wider vision. Go from tracking progress at the milestone
                level all the way
                done to the smallest of details. Never lose sight of the bigger picture again.</p>
            </li>
            <li>
              <h3 class="fs-600 fw-bold">Advanced built-in reports</h3>
              <p>Set internal delivery estimates and track progress toward company goals. Our customisable dashboard
                helps you build out
                the reports you need to keep key stakeholders informed.</p>
            </li>
            <li>
              <h3 class="fs-600 fw-bold">Everything you need in one place</h3>
              <p>Stop jumping from one service to another to communicate, store files, track tasks and share
                documents. Manage offers an
                all-in-one team productivity solution.</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>


  <section class="container | padding-block-700 ">
    <div class="" style="display: flex; align-items: center; justify-content: center; margin-bottom: 50px;">     <h2 class="fs-secondary-heading fw-bold">What they've said</h2>    </div>
    <!-- Carousel here -->
    <div class="" style="display: flex; align-items: center; justify-content: center;">  <button class="button">Get Started</button> </div>
  </section>


  <section class="cta | padding-block-700 bg-accent-400 text-neutral-100 "style="background-color: rgb(22, 28, 36)" >
    <div class="container" style="background-color: rgb(22, 28, 36)">
      <div class="even-columns">
        <div>
          <p class="fs-secondary-heading fw-bold">Simplify how your team works today.</p>
        </div>
        <div style="display: flex; justify-content: flex-end; align-items: center;">
          <button class="button" data-type="">Get Started</button>
        </div>
      </div>
    </div>
  </section>



  <div class="bg">
    <section class="container " 
    style="padding: 20px; display: flex; flex-direction: row;justify-content: space-evenly;
     max-width: 1200px; max-height: 524px; background-color: white;">
      
      <div class="imgwrapper " >
        <img src="https://static7.depositphotos.com/1158045/696/i/950/depositphotos_6963142-stock-photo-smiling-doctor-portrait.jpg "
         alt="AboutUs" class="abimg" style="  flex-basis: 0%;">
      </div>
    
      
      <div class="imgcontainer2 " style="display: flex; flex-direction: column; align-items: flex-end;   max-width: 480px;"> 
       
          <div class="imgcontainer2 " style="flex-grow: 10;" >
            <img src="https://thumbs.dreamstime.com/b/pill-7106005.jpg" alt="AboutUs" class="abimg " 
            style="align-items: flex-end; align-self: flex-end;    ">
          </div>
      
          <div class="imgcontainer2 " style="align-self:flex-start; flex-grow: 10;" >  
            <img src="https://thumbs.dreamstime.com/b/pills-different-colored-medicine-types-white-background-30346728.jpg" 
            alt="AboutUs" class="abimg" style=" z-index: 2;">
          </div>
      
        
    
      </div>
    
    
      <div class="imgwrapper " >
        <img src="https://st2.depositphotos.com/1010683/5848/i/950/depositphotos_58482379-stock-photo-male-asian-doctor.jpg" 
        alt="AboutUs" class="abimg" style="  flex-basis: 0%; ">
      </div>
    
    
    </section>
    
    
    
    <section class="container " style="display: flex; margin-top: 50px; max-height:430px ;">
      <div class="imgcontainer2 " 
        style="
        align-items: center;
        justify-items: center;">
    
            <div class="imgwrapper"  >
              <img src="https://previews.123rf.com/images/tomwang/tomwang1510/tomwang151000126/46811098-smiling-young-female-doctor-isolated-on-white.jpg" 
              alt="" class="i" style="z-index: 2; bottom:px ;">
            </div>
            <div class="imgwrapper">
              <img src="https://www.kindpng.com/picc/m/144-1443851_medical-logo-png-medical-laboratory-logo-png-transparent.png" 
              alt="" class="i" style="z-index:4; bottom: 160px; left: 120px; ">
            </div>
    
      </div>
    
    
        <div class="s " style="flex-basis: 60%; flex-direction: row;">
    
          <div class="textc2  " style="align-content: center; margin-bottom: 20px;">
              <H6 style="font-size: 24px; color: black; margin-bottom:0 ; font-weight: 700!important;">
                CHƯƠNG TRÌNH HỢP TÁC
              </H6>
            <div class="bigdash" style="margin:0;">
            </div></div>
    
          <div class="textc" style="margin-bottom: 20px;">
            <p class="blacktext"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    
            </p>
          </div>
    
    
          <div class="container " style="margin-left: 0px;">
    
            <div class='container2' style="padding-left: 0px; margin-bottom: 5px;">
              <div>
                  <img src='https://upload.wikimedia.org/wikipedia/commons/thumb/e/e4/Twitter_Verified_Badge.svg/512px-Twitter_Verified_Badge.svg.png' class='iconDetails2'>
              </div>  
          <div style='margin-left:30px;'>
          <a href="" class="blacktext" style="color: white;"><h4>It is a long established fact that a reader will be distr</h4></a>
          </div>
             </div>
    
             <div class='container2'style="padding-left: 0px;margin-bottom: 5px;">
              <div>
                  <img src='https://upload.wikimedia.org/wikipedia/commons/thumb/e/e4/Twitter_Verified_Badge.svg/512px-Twitter_Verified_Badge.svg.png' class='iconDetails2'>
              </div>  
          <div style='margin-left:30px;'>
          <a href="" class="blacktext" style="color: white;"><h4>es and web page editors now use Lorem Ipsu</h4></a>
          </div>
             </div> 
    
             <div class='container2'style="padding-left: 0px;margin-bottom: 5px;">
              <div>
                  <img src='https://upload.wikimedia.org/wikipedia/commons/thumb/e/e4/Twitter_Verified_Badge.svg/512px-Twitter_Verified_Badge.svg.png' class='iconDetails2'>
              </div>  
          <div style='margin-left:30px;'>
          <a href="" class="blacktext" style="color: white;"><h4>If you are going to use a passage of Lorem Ipsum,</h4></a>
          </div>
             </div>
    
    
    
          </div>
        </div>
    
    
    
    </section>
    </div>
    
    
    
    
    <section class="container  " style="display: flex; justify-items: center; align-items: center; margin-bottom: 0px; margin:0;">
      <div class="back">
    
          <div class="" style="    padding: 10px 1% 10px 1%;">
            <div class="textc2 " style="align-items: center;">
              <p class="" style="font-size: 24px; margin:0; margin-top :20px ;font-weight: 700;">LIÊN HỆ HỢP TÁC</p>
              <div class="bigdash"></div>
            </div>
        
            <div class="textc2" style="margin: 5px 0px 0px 0px ;">
              <p class="" style="margin:0; margin-top:20px;"> Vui lòng nhập thông tin liên hệ</p>
            </div>
        
          </div>
  

          <form class="contact-form " method="post" action="#">
      <input class="biginput" type="text" id="bname" name="bname" placeholder="Tên cửa hàng/ thương hiệu">
      <input class="gutter" type="text" id="rname" name="rname" placeholder=" Tên người đại diện " style="clear: both; margin: 0px; margin-right: 2.5%;">
      <select class="gutter" id="city"  id="tp" name="tp" aria-label=".form-select-sm"  >
        <option value="" selected>Chọn tỉnh thành</option>           
      </select>
      <select class="gutter" id="district"  id="qh" name="qh" aria-label=".form-select-sm"  >
        <option value="" selected>Chọn quận huyện</option>
      </select>
      <select class="gutter" id="ward"  id="px" name="px" aria-label=".form-select-sm"  >
        <option value="" selected>Chọn phường xã</option>
      </select>
  <select id="lhkd" name="lhkd" class="biginput">
    <option value="" selected>Loại hình kinh doanh </option>
    <option value="">Quan 1 </option>
    <option value="">Quan 1 </option>
</select>     

<input class="biginput" type="text" id="address" name="address" placeholder="Địa chỉ">

      <textarea name="message" id="message" placeholder="Lời nhắn"></textarea>
      <div style="display: inline-block;">
        <input type="checkbox" style="display: inline-block;"><p class="" style="display: inline-block  ;"> Toi dong y voi dieu khoang su dung</p>
      </div>

      <input type="submit" value="Submit" style="display: block; margin-left: 40%;" id="sub" name="sub">

    </form>
  </div>  
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/suppcuti/CatApi/app.js"></script>


</main>




  <footer class="padding-block-700 bg-neutral-900 text-neutral-100 " style="background-color: #431A9E;">
    <div class="container">
      <div class="even-columns">
        <div>
          <a href="#"><a href="#"><img src="https://brandlogos.net/wp-content/uploads/2020/09/react-logo-512x512.png" 
            style="position: relative; max-width: 40px;" />
          </a>
          <ul role="list" aria-label="Social links" style="display: flex; justify-content: flex-start; align-items: center; margin: 10px; margin-left: 0px !important; ">
            <li><a aria-label="facebook" href="#ss">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/2021_Facebook_icon.svg/768px-2021_Facebook_icon.svg.png?20210818083032 "alt="" class="icon">
            </a></li>
            <li><a aria-label="youtube" href="#">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/YouTube_full-color_icon_%282017%29.svg/2560px-YouTube_full-color_icon_%282017%29.svg.png"alt="" class="icon">
            </a></li>
            <li><a aria-label="twitter" href="#">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Twitter-logo.svg/2491px-Twitter-logo.svg.png"alt="" class="icon">
            </a></li>
            <li><a aria-label="pinterest" href="#">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Pinterest.svg/1200px-Pinterest.svg.png"alt="" class="icon">
            </a></li>
            <li><a aria-label="instragram" href="#">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/Instagram.svg/2048px-Instagram.svg.png"alt="" class="icon">
            </a></li>
          </ul>
        </div>
        <div>

          <nav class="footer-nav">
            <ul aria-label="Footer" role="list">
              <li><a href="#">Home</a></li>
              <li><a href="#">Pricing</a></li>
              <li><a href="#">Products</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="#">Community</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </nav>

        </div>
        <div>
          <form action="">
            <input type="email">
            <button class="button">Go</button>
            <p>Copyright 2020. All Rights Reserved</p>
          </form>
        </div>
      </div>
    </div>


  
  </footer>


  <script type="module" src="/main.js"></script>
</body>

</html>