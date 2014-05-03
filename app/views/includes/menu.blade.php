<div class="menu">
   <ul>
      <li class="blank"></li>

         <li class="menu-section top">
            <a href="{{ URL::to('/') }}">
               <div class="section-contents">
                  <i class="fa fa-home"></i>
                  <br><br>
                  Home
               </div>
            </a>
         </li>

         <li class="menu-section">
            <a href="{{ URL::to('/about') }}">
               <div class="section-contents">
                  <i class="fa fa-info"></i>
                  <br><br>
                  About
               </div>
            </a>
         </li>

      <li class="menu-section">
         <ul class="sub-menu">
            <li class="sub-menu-section top">
               <div class="sub-menu-contents">
                  Find my MP
               </div>
            </li>
            <li class="sub-menu-section">
               <div class="sub-menu-contents">
                  Find my Senators
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
                  <br><br>
                  Email MPs & Senators
            </div>
         </a>
      </li>
      <li class="menu-section">
         <div class="section-contents">
            <i class="fa fa-user"></i>
            <br><br>
            Email Ministers
         </div>
      </li>

      <li class="menu-section">
         <a href="{{ URL::to('/contact') }}">
            <div class="section-contents">
               <i class="fa fa-envelope"></i>
               <br><br>
               Contact Us
            </div>
         </a>
      </li>
   </ul>
</div><!-- menu -->
