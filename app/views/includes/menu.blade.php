<div class="menu">
   <ul>
      <li class="blank"> </li>

         <li class="menu-section top">
            <a href="{{ URL::to('/') }}">
               <div class="section-contents">
                  <i class="fa fa-home"></i>
                  <br>
                  Home
               </div>
            </a>
         </li>
      <li class="menu-section">
         <ul class="sub-menu">
            <li class="sub-menu-section top">
               <div class="sub-menu-contents">
                  <a href="{{ URL::to('findpolitician') }}">Find a Politician</a>
               </div>
            </li>
            <li class="sub-menu-section">
               <div class="sub-menu-contents">
                  <a href="{{ URL::to('lowerhouse') }}">All MPs</a>
               </div>
            </li>
               <li class="sub-menu-section">
                  <div class="sub-menu-contents">
                     <a href="{{ URL::to('upperhouse') }}">All Senators</a>
                  </div>
               </li>
         </ul>
         <a href="#">
            <div class="section-contents">
               <i class="fa fa-search"></i>
                  <br>
                  Email MPs & Senators
            </div>
         </a>
      </li>
      <li class="menu-section">
         <a href="{{ URL::to('ministers') }}">
            <div class="section-contents">
               <i class="fa fa-user"></i>
               <br>
               Email Ministers
            </div>
         </a>
      </li>
      <li class="menu-section">
         <a href="{{ URL::to('/about') }}">
            <div class="section-contents">
               <i class="fa fa-info"></i>
               <br>
               About
            </div>
         </a>
      </li>
      <li class="menu-section">
         <a href="{{ URL::to('contact') }}">
            <div class="section-contents">
               <i class="fa fa-envelope"></i>
               <br>
               <a href="{{ URL::to('contact') }}">Contact Us</a>
            </div>
         </a>
      </li>
   </ul>
   <footer class="menu-footer">
      <a href="http://www.twitter.com/ContactMyMp" target="_blank"><i class="fa fa-twitter"></i></a><a href="https://www.facebook.com/contactmympaustralia" target="_blank"><i class="fa fa-facebook"></i></a>
      <br>&copy; contactmymp.com
      <br>2014
      <br><a href="{{ URL::to('/privacy') }}">Privacy Policy</a>
   </footer>
</div><!-- menu -->


<div id="slider" class="slidermenu slidermenu-left">
   <ul>
      <li class="blank"></li>
         <li class="menu-section top">
            <a href="{{ URL::to('/') }}">
               <div class="section-contents">
                  <i class="fa fa-home"></i>
                  <br>
                  Home
               </div>
            </a>
         </li>
      <li class="menu-section">
         <ul class="sub-menu">
            <li class="sub-menu-section top">
               <div class="sub-menu-contents">
                  <a href="{{ URL::to('findpolitician') }}">Find a Politician</a>
               </div>
            </li>
            <li class="sub-menu-section">
               <div class="sub-menu-contents">
                  <a href="{{ URL::to('lowerhouse') }}">All MPs</a>
               </div>
            </li>
               <li class="sub-menu-section">
                  <div class="sub-menu-contents">
                     <a href="{{ URL::to('upperhouse') }}">All Senators</a>
                  </div>
               </li>
         </ul>
         <a href="#">
            <div class="section-contents">
               <i class="fa fa-search"></i>
                  <br>
                  Email MPs & Senators
            </div>
         </a>
      </li>
      <li class="menu-section">
         <a href="{{ URL::to('ministers') }}">
            <div class="section-contents">
               <i class="fa fa-user"></i>
               <br>
               Email Ministers
            </div>
         </a>
      </li>
      <li class="menu-section">
         <a href="{{ URL::to('about') }}">
            <div class="section-contents">
               <i class="fa fa-info"></i>
               <br>
               About
            </div>
         </a>
      </li>
      <li class="menu-section">
         <a href="{{ URL::to('contact') }}">
            <div class="section-contents">
               <i class="fa fa-envelope"></i>
               <br>
               Contact Us
            </div>
         </a>
      </li>
   </ul>
   <footer class="menu-footer">
      <a href="http://www.twitter.com/ContactMyMp" target="_blank"><i class="fa fa-twitter"></i></a><a href="https://www.facebook.com/contactmympaustralia" target="_blank"><i class="fa fa-facebook"></i></a>
      <br>&copy; contactmymp.com
      <br>2014
      <br><a href="{{ URL::to('/privacy') }}">Privacy Policy</a>
   </footer>
</div>
