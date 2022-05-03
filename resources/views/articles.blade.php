<section id="why-us" class="why-us">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
        @foreach($articlies as $key=>$item)  
           @if($key == 0)    
              <h3>{{$articlies->title}}</h3>
              <p>
                 {{$articlies->text}}   
              </p>
              <div class="text-center">
                <a href="{{$articlies->id}}" class="more-btn">Batafsil <i class="bx bx-chevron-right"></i></a>
              </div>
            @endif  
        @endforeach      
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Corporis voluptates sit</h4>
                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                    <div class="text-center">
                      <a href="#" class="more-btn">Batafsil</a>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>
      </div>
</section><!-- End Why Us -->  