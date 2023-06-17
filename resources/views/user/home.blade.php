@extends('user.partials.template')
@section('title')
Home
@endsection
@section('main')
   <div class="header_section">

     
      <!-- banner section start -->
      <div id="main_slider" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="banner_section">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-6">
                           <h1 class="banner_taital">EPI Vaccination<br><span style="color: #151515;">Program</span></h1>
                           <p class="banner_text">A digitalized system for Expanded Programme on Immunization for Children</p>
                           <div class="btn_main">
                              <div class="more_bt"><a href="{{url('/registration')}}">Registration Now</a></div>
                              <div class="contact_bt"><a href="#">Get A Guideline</a></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="image_1"><img src="{{asset('template/images/Vaccination-1.JPG')}}" style="width: 580px; height: 431px;"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="banner_section">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-6">
                           <h1 class="banner_taital">COVID-19 Vaccination<br><span style="color: #151515;">Program</span></h1>
                           <p class="banner_text">COVID-19 Vaccination for Children Integrated with EPI</p>
                           <div class="btn_main">
                              <div class="more_bt"><a href="{{url('/registration')}}">Registration Now</a></div>
                              <div class="contact_bt"><a href="#">Get A Guideline</a></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="image_1"><img src="{{asset('template/images/Vaccination-6.JPG')}}" style= "width: 580px; height: 431px;"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="banner_section">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-6">
                           <h1 class="banner_taital">EPI and COVID Vaccination<br><span style="color: #151515;">Joint Program</span></h1>
                           <p class="banner_text">Secured Integration of EPI with COVID-19 Vaccination for Children</p>
                           <div class="btn_main">
                              <div class="more_bt"><a href="{{url('/registration')}}">Registration Now</a></div>
                              <div class="contact_bt"><a href="#">Get A Guideline</a></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="image_1"><img src="{{asset('template/images/Vaccination-4.JPG')}}" style= "width: 580px; height: 431px;"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class="fa fa-long-arrow-left" style="font-size:24px; padding-top: 4px;"></i>
         </a>
         <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class="fa fa-long-arrow-right" style="font-size:24px; padding-top: 4px;"></i>
         </a>
      </div>
   </div>
   <!-- banner section end -->
   <!-- health section start -->
   <div class="health_section layout_padding">
      <div class="container">
         <h1 class="health_taital" style="color: #18F8F8;text-align: center;">EPI</h1>
         <p style="text-align: justify; color: #1C2833;font-size: 18px">
            Expanded Program on Immunization (EPI) is a program that aims to ensure that children receive vaccines that protect them from preventable diseases. In Bangladesh, EPI is implemented by the Ministry of Health and Family Welfare,
            and it provides vaccines to children free of cost. The vaccines are provided 
            to children through a network of health facilities, outreach programs, and vaccination campaigns. The program aims to reach all children under one year 
            of age, and it has been successful in reducing the incidence of vaccine preventable diseases in Bangladesh.It is important to note that parents and caregivers should ensure that their children receive all the recommended vaccines under the EPI program to ensure that they are protected from these diseases. Vaccination not only protects the individual child but also contributes to the overall public health of the community by preventing the spread of infectious diseases.
</p>
         <!-- <p class="health_text">The goal of the national Immunization Policy in Bangladesh is to ensure the reduction in vaccine preventable diseases for all age groups through the provision of quality, effective and safe immunization services through public, private, and NGO sectors. Its larger health and development objectives will depend on the accomplishment of this goal. The World Health Organization (WHO) initiated the Expanded Program on Immunization (EPI) in May 1974 with the 
         objective to vaccinate children throughout the world and the program was launched in Bangladesh in 1979. In 1999, the Global Alliance for Vaccines and Immunization (GAVI) was created with the sole purpose of improving child health in the poorest countries by extending the reach of the EPI. The GAVI brought together a grand coalition, including the UN agencies and institutions (WHO, UNICEF, the World Bank), public health institutes, donor and implementing countries, the Bill and Melinda Gates Foundation and the Rockefeller Foundation, the vaccine industry, non-governmental organizations (NGOs) and many more. The creation of the GAVI has helped to renew interest and maintain the importance of immunizations in battling the world’s large burden of infectious diseases.</p> -->
         <div class="health_section layout_padding">
            <div class="row">
               <div class="col-sm-7">
                  <div class="image_main">
                     <div class="main">
                        <img src="{{asset('template/images/tika-2.png')}}" alt="Avatar" class="image" style="width:100%;height: 365px">
                     </div>
                     
                  </div>
               </div>
               <div class="col-sm-5">
                  <div class="image_main_1">
                     <div class="main">
                        <img src="{{asset('template/images/tika-1.png')}}" alt="Avatar" class="image" style="width:100% width: 350px; height: 365px;">
                     </div>
                     
                  </div>
               </div>
            </div>
            <div class="getquote_bt_1"><a target="_blank" href="https://old.dghs.gov.bd/index.php/en/mis-docs/epi">Read More <span><img src="{{asset('template/images/right-arrow.png')}}"></span></a></div>
         </div>
         <h1 class="health_taital" style="color: #18F8F8;">COVID-19 Vaccination for Children </h1>
         <p class="health_text">The goal of the national Immunization Policy in Bangladesh is to ensure the reduction in vaccine preventable diseases for all age groups through the provision of quality, effective and safe immunization services through public, private, and NGO sectors. Its larger health and development objectives will depend on the accomplishment of this goal. The World Health Organization (WHO) initiated the Expanded Program on Immunization (EPI) in May 1974 with the 
         objective to vaccinate children throughout the world and the program was launched in Bangladesh in 1979. In 1999, the Global Alliance for Vaccines and Immunization (GAVI) was created with the sole purpose of improving child health in the poorest countries by extending the reach of the EPI. The GAVI brought together a grand coalition, including the UN agencies and institutions (WHO, UNICEF, the World Bank), public health institutes, donor and implementing countries, the Bill and Melinda Gates Foundation and the Rockefeller Foundation, the vaccine industry, non-governmental organizations (NGOs) and many more. The creation of the GAVI has helped to renew interest and maintain the importance of immunizations in battling the world’s large burden of infectious diseases.</p>


         <h1 class="health_taital" style="color: #18F8F8;">Joint Vaccination Program of EPI & COVID-19 </h1>
         <p class="health_text">The goal of the national Immunization Policy in Bangladesh is to ensure the reduction in vaccine preventable diseases for all age groups through the provision of quality, effective and safe immunization services through public, private, and NGO sectors. Its larger health and development objectives will depend on the accomplishment of this goal. The World Health Organization (WHO) initiated the Expanded Program on Immunization (EPI) in May 1974 with the 
         objective to vaccinate children throughout the world and the program was launched in Bangladesh in 1979. In 1999, the Global Alliance for Vaccines and Immunization (GAVI) was created with the sole purpose of improving child health in the poorest countries by extending the reach of the EPI. The GAVI brought together a grand coalition, including the UN agencies and institutions (WHO, UNICEF, the World Bank), public health institutes, donor and implementing countries, the Bill and Melinda Gates Foundation and the Rockefeller Foundation, the vaccine industry, non-governmental organizations (NGOs) and many more. The creation of the GAVI has helped to renew interest and maintain the importance of immunizations in battling the world’s large burden of infectious diseases.</p>
         
      </div>
   </div>
   <!-- health section end -->

   <!-- knowledge section end -->
   <div class="knowledge_section layout_padding">
      <div class="container">
         <div class="knowledge_main">
            <div class="left_main">
               <h1 class="knowledge_taital"> Be A Responsible Parent and Get Your Child Vaccinated on time</h1>
               <p class="knowledge_text"><!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam --></p>
            </div>
            <div class="right_main">
               <div class=""><a target="_blank" href="https://www.youtube.com/watch?v=K6bd3gefhc0"><img src="{{asset('template/images/play-icon.png')}}"></a></div>
            </div>
         </div>
      </div>
   </div>
   <!-- knowledge section end -->
   <!-- news section start -->
   <div class="news_section layout_padding">
      <div class="container">
         <h1 class="health_taital">Why choose Smart EPI</h1>
         <p class="health_text">labore et dolore magna aliqua. Ut enim ad minim veniam</p>
         <div class="news_section_2 layout_padding">
            <div class="row">
              
               <div class="col-lg-4 col-sm-6">
                  <div class="box_main">
                     <div class="icon_1"><img src="{{asset('template/images/reg-icon1.png')}}"></div>
                     <h4 class="daily_text">Online Registration</h4>
                  </div>
               </div>

              <div class="col-lg-4 col-sm-6">
                  <div class="box_main active">
                     <div class="icon_1"><img src="{{asset('template/images/notification-icon1.png')}}"></div>
                     <h4 class="daily_text">Notifications</h4>
                  </div>
               </div>

               
            <!--   <div class="col-lg-4 col-sm-6">
                  <div class="box_main active">
                     <div class="icon_1"><img src="{{asset('template/images/notification-icon1.png')}}"></div>
                     <h4 class="daily_text_1"> On Time Notifications</h4>
                  </div>
               </div>
             -->
               <div class="col-lg-4 col-sm-6">
                  <div class="box_main">
                     <div class="icon_1"><img src="{{asset('template/images/updated-1.png')}}"></div>
                     <h4 class="daily_text_1">EPI & COVID-19 Updates </h4>
                  </div>
               </div>
            </div>
         </div>
         <div class="getquote_bt"><a href="#">Get A Quote <span><img src="images/right-arrow.png"></span></a></div>
      </div>
   </div>
   <!-- news section end -->
   <!-- contact section start -->
   <div class="contact_section layout_padding">
      <div class="container">
         <h1 class="contact_taital">What we do</h1>
         <div class="news_section_2">
            <div class="row">
               <div class="col-md-6">
                  <div class="icon_main">
                     <div class="icon_7"><img src="images/icon-7.png"></div>
                     <h4 class="diabetes_text">Diabetes and obesity Counselling </h4>
                  </div>
                  <div class="icon_main">
                     <div class="icon_7"><img src="images/icon-5.png"></div>
                     <h4 class="diabetes_text">Obstetrics and Gynsecology</h4>
                  </div>
                  <div class="icon_main">
                     <div class="icon_7"><img src="images/icon-6.png"></div>
                     <h4 class="diabetes_text">Surgical and medical Oncology</h4>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="contact_box">
                     <h1 class="book_text">Book Appoinment</h1>
                     <input type="text" class="Email_text" placeholder="Name" name="Name">
                     <input type="text" class="Email_text" placeholder="Name" name="Name">
                     <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                     <div class="send_bt"><a href="#">SEND</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- contact section end -->
   <!-- client section start -->
   <div class="client_section layout_padding">
      <div id="my_slider" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="container">
                  <h1 class="client_taital">About Us</h1>
                  <p class="client_text">Our team was form to achieve the goal to integrate and make a structured database model for EPI and COVIS-19 vaccination </p>

               <h2 style="text-align:center">Project Supervisor</h2>
            

<div class="row">
  <div class="column">
    <div class="card">
      <img src="/w3images/team1.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Dr. Kazi Abu Taher </h2>
        <p class="title">Chairman Department of ICT
             </p>
        <p>Faculty of Science & Technology
             Bangladesh University Of Professionals</p>
        <p>kataher@bup.edu.bd</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  

                <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>


<div>
<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="/w3images/team1.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Salsabil Shama</h2>
        <p class="title">Team Leader and Web Developer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>shama.ss242@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="/w3images/team2.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Shraboni Dey Prapti</h2>
        <p class="title">Conent Designer and </p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>mike@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="/w3images/team3.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Sharmin Shabnam </h2>
        <p class="title"></p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>john@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
</div>

                  <!-- <div class="client_section_2">
                     <div class="client_left">
                        <div><img src="images/client-img.png" class="client_img"></div>
                     </div>
                     
                  </div> -->
               </div>
            </div>
         <!--    <div class="carousel-item">
               <div class="container">
                  <h1 class="client_taital">What People Say</h1>
                  <p class="client_text">It is a long established fact that a reader will be distracted </p>
                  <div class="client_section_2">
                     <div class="client_left">
                        <div><img src="images/client-img.png" class="client_img"></div>
                     </div>
                     <div class="client_right">
                        <h3 class="distracted_text">Distracted by</h3>
                        <p class="lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                        <div class="quote_icon"><img src="images/quote-icon.png"></div>
                     </div>
                  </div>
               </div>
            </div> -->
         <!--    <div class="carousel-item">
               <div class="container">
                  <h1 class="client_taital">What People Say</h1>
                  <p class="client_text">It is a long established fact that a reader will be distracted </p>
                  <div class="client_section_2">
                     <div class="client_left">
                        <div><img src="images/client-img.png" class="client_img"></div>
                     </div>
                     <div class="client_right">
                        <h3 class="distracted_text">Distracted by</h3>
                        <p class="lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                        <div class="quote_icon"><img src="images/quote-icon.png"></div>
                     </div>
                  </div>
               </div>
            </div> -->
         </div>
         <!-- <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
            <i class="fa fa-long-arrow-left" style="font-size:24px; padding-top: 4px;"></i>
         </a>
         <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
            <i class="fa fa-long-arrow-right" style="font-size:24px; padding-top: 4px;"></i>
         </a> -->
      </div>
   </div>
   <!-- client section end -->
@endsection