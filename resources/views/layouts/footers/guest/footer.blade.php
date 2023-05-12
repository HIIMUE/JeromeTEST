  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-5">
    <div class="container">
      <div class="row">
      <div class="col-lg-8 mb-4 mx-auto text-center">
          <a href="https://www.google.com/maps/place/Manticao,+Misamis+Oriental/data=!4m2!3m1!1s0x32556f1cdff41547:0x643ccca7f5b9e011?sa=X&ved=2ahUKEwjoqZPGsuP-AhWPB4gKHcp4AFoQ8gF6BAgOEAI" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Location
          </a>
          <a href="https://www.facebook.com/jeromeporcado14" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              About Us
          </a>
          <a href="" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Capstone Team
          </a>
          <a href="https://www.facebook.com/places/Things-to-do-in-Lugait-Misamis-Oriental/105689252799250" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Lugait
          </a>
          <a href="" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Services
          </a>
          <a href="" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Payments
          </a>
      </div>
        @if (!auth()->user() || \Request::is('static-sign-up')) 
          <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
              <a href="" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-dribbble" aria-hidden="true"></span>
              </a>
              <a href="" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-twitter" aria-hidden="true"></span>
              </a>
              <a href="" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-instagram" aria-hidden="true"></span>
              </a>
              <a href="" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-pinterest" aria-hidden="true"></span>
              </a>
              <a href="" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-github" aria-hidden="true"></span>
              </a>
          </div>
        @endif
      </div>
      @if (!auth()->user() || \Request::is('static-sign-up')) 
        <div class="row">
          <div class="col-8 mx-auto text-center mt-1">
            <p class="mb-0 text-secondary">
              Year <script>
                document.write(new Date().getFullYear())
              </script> Made by 
              <a style="color: #252f40;" href="https://www.facebook.com/search/top?q=college%20of%20marine%20and%20allied%20sciences%20-%20msu%20at%20naawan" class="font-weight-bold ml-1" target="_blank">MSU-NAAWAN</a>
              
              <a style="color: #252f40;" href="https://www.facebook.com/search/top?q=college%20of%20marine%20and%20allied%20sciences%20-%20msu%20at%20naawan" class="font-weight-bold ml-1" target="_blank">STUDENTS</a>.
            </p>
          </div>
        </div>
      @endif
    </div>
  </footer>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
