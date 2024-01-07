<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('images/css/landingpage.css') }}">
    
    <title>
        {{ $title }}
    </title>

</head>
<body>

    <div class="header">
        <div class="text">
            <p>Have any question?</p>
            <p>exaple@gmail.com</p>
            <p>+1-202-555-0174</p>
        </div>
        <div class="content-right">
            <a href="">
                <img src="{{ asset('images/america.png') }}" alt="English flag" class="flag">
            </a>            
                <p>English</p>
                <p>USD</p>  
        </div>
    </div>
    <nav class="navbar">
           <div class="left-container">
            <p>Weslic <span>University</span>    </p>
           </div>
           <div class="middle-container">
                    <a href="#home">Home</a>
                    <a href="#mylearning">My Learning</a>
                    <a href="#menjadiinstruktur">Menjadi Instruktur</a>
                    <a href="#blog">Blog</a>
                    <a href="#aboutus">About Us</a>
           </div>
            <div class="right-container">
                <div class="carnot">
                    <a href="">
                        <img src="{{ asset('images/cart.png') }}" alt="" class="cart">
                    </a>
                <a href="#">
                    <img src="{{ asset('images/bell.png') }}" alt="" class="bel">
                </a>
                </div>
                <div class="sign-up">
                    <a href="#">Buat Akun</a>
                </div>
            </div>
    </nav> 

    {{-- Home Section starts --}}
    <section class="home" id="home">
        <div class="content">
            <h1>Learn Without Limits</h1>
            <p>Welcome to the world of limitless learning, where knowledge and skills are the keys to freedom. We proudly
                present E-learning Beyond Limits. Here you are the architect of your own educational journey. There are no 
                boundaries, no restrictions only boundless potential.
            </p>

            <div class="input">
                <form action="/search"> 
                    <input type="text" name="search" placeholder="  Cari kursus, instruktur dan organsasi" class="search">
                    <button type="submit">
                        Search
                        <img src="" alt="">
                    </button>
                  </form>
                  
                  <a href="#">Explore all courses</a>
            </div>           
        </div>

        <div class="image-box">
            <img src="{{ asset('images/image-box/jadali.jpg') }}" alt="Big Image" class="big-image">
            <div class="small-images">
                <img src="{{ asset('images/image-box/jerome.png') }}" alt="Small Image 1" class="sm1">
            <img src="{{ asset('images/image-box/maudy-ayunda.jpg') }}" alt="Small Image 2" class="sm2">
            </div>
        </div>


       
          
     

    </section>

 <section class="mylearning" id="mylearning">
              <div class="course">
                <a href="#">
              
                        <img src="{{ asset("images/mylearning/web-design.jpg") }}" alt="course 1">
                        <div class="text-body">
                            <h1>Web Design</h1>
                            <p>Web App Application</p>
    
                    </div>
                   </a>
                       
              
                    <a href="#">
                   
                            <img src="{{ asset('images/mylearning/graphic-design.jpg') }}" alt="">
                            <div class="text-body">
                                <h1>Graphic Design</h1>
                                <p>Design is Art</p>
                                        
                        </div>
                    </a>
                  
                    <a href="#">
                      
                            <img src="{{ asset('images/mylearning/personal-development.jpeg') }}" alt="">
                            <div class="text-body">
                                <h1>Personal Development</h1>
                                <p>Web App Application</p>
                                         
                        </div>
                    </a>
                    
                  <a href="#">
                  
                        <img src="{{ asset('images/mylearning/it&software.webp') }}" alt="">
                        <div class="text-body">
                            <h1>IT and Software</h1>
                            <p>Web App Application</p>
                        </div>             
                   
                  </a>
              </div>

              <div class="new-course">
                <div class="title">
                    <h4>KURSUS KAMI</h4>
                    <h2>Kursus Terbaru</h2>
                    <p>#Kursus yang baru diterbitkan</p>
                </div>
              </div>

                <div class="course-class">
                    <a href="#">
                        <img src="{{ asset('images/mylearning/new-courses.jpg') }}" alt="">
                        <div class="course">
                            <h2>Laravel Class</h2>
                        </div>
                        <div class="text">
                            <p>Explore Laravel PHP framework
                                <br>
                            courses to build your projects
                        </p>
                        </div>      
                        <div class="date-duration">
                            <div class="duration">
                                <img src="{{ asset('images/mylearning/time-date/time.png') }}" alt=""> 
                                <p>1:50</p>
                            </div>  
                            <div class="date">
                                <img src="{{ asset('images/mylearning/time-date/date.png') }}" alt="">
                                <p>13 Nov 2023</p>
                            </div>
                        </div>     
                        <div class="review">
                            <div class="amount-review">
                                <p>27 Review</p>
                            </div>
                            <div class="amount-star">
                                <p>5/5</p>
                                <img src="{{ asset('images/mylearning/Review/5-star-remove.png') }}" alt="">
                            </div>
                        </div>     
                        <div class="price">
                            <h1>Rp150.000</h1>
                        </div>
                </a>

                <a href="#">
                    <img src="{{ asset('images/mylearning/new-courses.jpg') }}" alt="">
                    <div class="course">
                        <h2>Laravel Class</h2>
                    </div>
                    <div class="text">
                        <p>Explore Laravel PHP framework
                            <br>
                        courses to build your projects
                    </p>
                    </div>      
                    <div class="date-duration">
                        <div class="duration">
                            <img src="{{ asset('images/mylearning/time-date/time.png') }}" alt=""> 
                            <p>1:50</p>
                        </div>
                        <div class="date">
                            <img src="{{ asset('images/mylearning/time-date/date.png') }}" alt="">
                            <p>13 Nov 2023</p>
                        </div>
                    </div>     
                    <div class="review">
                        <div class="amount-review">
                            <p>27 Review</p>
                        </div>
                        <div class="amount-star">
                            <p>5/5</p>
                            <img src="{{ asset('images/mylearning/Review/5-star-remove.png') }}" alt="">
                        </div>
                    </div>     
                    <div class="price">
                        <h1>Rp150.000</h1>
                    </div>
            </a>

            <a href="#">
                <img src="{{ asset('images/mylearning/new-courses.jpg') }}" alt="">
                <div class="course">
                    <h2>Laravel Class</h2>
                </div>
                <div class="text">
                    <p>Explore Laravel PHP framework
                        <br>
                    courses to build your projects
                </p>
                </div>      
                <div class="date-duration">
                    <div class="duration">
                        <img src="{{ asset('images/mylearning/time-date/time.png') }}" alt=""> 
                        <p>1:50</p>
                    </div>
                    <div class="date">
                        <img src="{{ asset('images/mylearning/time-date/date.png') }}" alt="">
                        <p>13 Nov 2023</p>
                    </div>
                </div>     
                <div class="review">
                    <div class="amount-review">
                        <p>27 Review</p>
                    </div>
                    <div class="amount-star">
                        <p>5/5</p>
                        <img src="{{ asset('images/mylearning/Review/5-star-remove.png') }}" alt="">
                    </div>
                </div>     
                <div class="price">
                    <h1>Rp150.000</h1>
                </div>
        </a>

    <a href="#">
        <img src="{{ asset('images/mylearning/new-courses.jpg') }}" alt="">
        <div class="course">
            <h2>Laravel Class</h2>
        </div>
        <div class="text">
            <p>Explore Laravel PHP framework
                <br>
            courses to build your projects
        </p>
        </div>      
        <div class="date-duration">
            <div class="duration">
                <img src="{{ asset('images/mylearning/time-date/time.png') }}" alt=""> 
                <p>1:50</p>
            </div>
            <div class="date">
                <img src="{{ asset('images/mylearning/time-date/date.png') }}" alt="">
                <p>13 Nov 2023</p>
            </div>
        </div>     
        <div class="review">
            <div class="amount-review">
                <p>27 Review</p>
            </div>
            <div class="amount-star">
                <p>5/5</p>
                <img src="{{ asset('images/mylearning/Review/5-star-remove.png') }}" alt="">
            </div>
        </div>     
        <div class="price">
            <h1>Rp150.000</h1>
        </div>
        </a>
    <a href="#">
            <img src="{{ asset('images/mylearning/new-courses.jpg') }}" alt="">
            <div class="course">
                <h2>Laravel Class</h2>
            </div>
            <div class="text">
                <p>Explore Laravel PHP framework
                    <br>
                courses to build your projects
            </p>
            </div>      
            <div class="date-duration">
                <div class="duration">
                    <img src="{{ asset('images/mylearning/time-date/time.png') }}" alt=""> 
                    <p>1:50</p>
                </div>
                <div class="date">
                    <img src="{{ asset('images/mylearning/time-date/date.png') }}" alt="">
                    <p>13 Nov 2023</p>
                </div>
            </div>     
            <div class="review">
                <div class="amount-review">
                    <p>27 Review</p>
                </div>
                <div class="amount-star">
                    <p>5/5</p>
                    <img src="{{ asset('images/mylearning/Review/5-star-remove.png') }}" alt="">
                </div>
            </div>     
            <div class="price">
                <h1>Rp150.000</h1>
            </div>
        </a>
   <a href="#">
                    <img src="{{ asset('images/mylearning/new-courses.jpg') }}" alt="">
                    <div class="course">
                        <h2>Laravel Class</h2>
                    </div>
                    <div class="text">
                        <p>Explore Laravel PHP framework
                            <br>
                        courses to build your projects
                    </p>
                    </div>      
                    <div class="date-duration">
                        <div class="duration">
                            <img src="{{ asset('images/mylearning/time-date/time.png') }}" alt=""> 
                            <p>1:50</p>
                        </div>
                        <div class="date">
                            <img src="{{ asset('images/mylearning/time-date/date.png') }}" alt="">
                            <p>13 Nov 2023</p>
                        </div>
                    </div>     
                    <div class="review">
                        <div class="amount-review">
                            <p>27 Review</p>
                        </div>
                        <div class="amount-star">
                            <p>5/5</p>
                            <img src="{{ asset('images/mylearning/Review/5-star-remove.png') }}" alt="">
                        </div>
                    </div>     
                    <div class="price">
                        <h1>Rp150.000</h1>
                    </div>
      </a>                       
        </div>

              <div class="see-all-courses">
                <a href="#">
                    <h1>Lihat Semua Courses</h1>
                </a>
            </div>
</section>

<div class="language-academic">
                  <a href="">
                    <div class="header">
                        <p>WHY CHOOSE US</p>
                    </div>
                  </a>
                <div class="text">
                    <h1>Why Choose Histudy</h1>
                    <p>Language Academic?</p>   
                </div>

             <div class="connector">
                    <hr>
                <div class="card-container">             
                        <div class="card-1">
                              <div class="profile">
                               <br>
                               <div class="profile2">
                                   <img src="{{ asset('images/card/graduate.png') }}" class="">
                               </div>                 
                              </div>
                           <div class="profile-text">
                               <h1>10</h1>
                               <p>Instruktur Tertampil</p>
                           </div>
                        </div>
               
                        <div class="card">
                               <div class="profile">
                                <br>
                                <div class="profile2">
                                    <img src="{{ asset('images/card/mengikuti.png') }}" class="">
                                </div>                 
                               </div>
                            <div class="profile-text">
                                <h1>10</h1>
                                <p>Instruktur Tertampil</p>
                            </div>
                        </div>
                       <div class="card">
                               <div class="profile">
                                <br>
                                <div class="profile2">
                                    <img src="{{ asset('images/card/kelas-langsung.png') }}" class="">
                                </div>                 
                               </div>
                            <div class="profile-text">
                                <h1>10</h1>
                                <p>Instruktur Tertampil</p>
                            </div>
                       </div>
                        <div class="card">
                               <div class="profile">
                                <br>
                                <div class="profile2">
                                    <img src="{{ asset('images/card/kursus-video.png') }}" class="">
                                </div>                 
                               </div>
                            <div class="profile-text">
                                <h1>10</h1>
                                <p>Instruktur Tertampil</p>
                            </div>
                        </div>
                         
                </div>
             </div>

                    {{-- <div class="card-container">             
                        <div class="card-1">
                              <div class="profile">
                               <br>
                               <div class="profile2">
                                   <img src="{{ asset('images/card/graduate.png') }}" class="">
                               </div>                 
                              </div>
                           <div class="profile-text">
                               <h1>10</h1>
                               <p>Instruktur Tertampil</p>
                           </div>
                        </div>
               
                        <div class="card">
                               <div class="profile">
                                <br>
                                <div class="profile2">
                                    <img src="{{ asset('images/card/mengikuti.png') }}" class="">
                                </div>                 
                               </div>
                            <div class="profile-text">
                                <h1>10</h1>
                                <p>Instruktur Tertampil</p>
                            </div>
                        </div>
                       <div class="card">
                               <div class="profile">
                                <br>
                                <div class="profile2">
                                    <img src="{{ asset('images/card/kelas-langsung.png') }}" class="">
                                </div>                 
                               </div>
                            <div class="profile-text">
                                <h1>10</h1>
                                <p>Instruktur Tertampil</p>
                            </div>
                       </div>
                        <div class="card">
                               <div class="profile">
                                <br>
                                <div class="profile2">
                                    <img src="{{ asset('images/card/kursus-video.png') }}" class="">
                                </div>                 
                               </div>
                            <div class="profile-text">
                                <h1>10</h1>
                                <p>Instruktur Tertampil</p>
                            </div>
                        </div>
                         
               </div> --}}          
</div>

<section class="menjadi-instruktur" id="menjadiinstruktur">
    <div class="image-box">
        <div class="left">
            <img src="{{ asset('images/image-box/jadali.jpg') }}" alt="">
        </div>
        <div class="right">
            <img src="{{ asset('images/image-box/jerome.png') }}" alt="">
        </div>
    </div>
</section>



</body>
</html>

