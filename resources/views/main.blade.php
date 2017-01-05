@extends('layouts.app')

@section('content')

    <div class="container">

      <div class="page-header">
        <div class="row">
          <div class="col-lg-8 col-md-7 col-sm-6">
            <h1>TOP100</h1>
          </div>
          <!-- <div class="col-lg-4 col-md-5 col-sm-6">
            <div class="sponsor">
              <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1673&serve=C6AILKT&placement=bootswatchcom" id="_carbonads_js"></script>
            </div>
          </div> -->
        </div>
      </div>

        <div class="row">
          <div class="col-lg-12">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th></th>
                    <th class="hidden-xs"></th>
                    <th></th>
                    <th>Title</th>
                    <th>Artists</th>
                    <th>Label</th>
                    <th>Genre</th>
                    <th  class="hidden-xs">Release</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td  class="hidden-xs"> <img src="14788499.jpg" alt="" class="img-responsive img-34"></td>
                    <td>
                        <a href="#">
                            <span class="glyphicon glyphicon-play-circle"></span>
                        </a>
                    </td>
                    <td>Sheeple Original Mix</td>
                    <td>Green Velvet, Prok & Fitch</td>
                    <td>Relief</td>
                    <td>Tech House</td>
                    <td  class="hidden-xs">2016-11-18</td>
                    <td>
                        <a href="#" class="download">
                            <span class="glyphicon glyphicon-download"></span>
                        </a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td  class="hidden-xs"> <img src="14788499.jpg" alt="" class="img-responsive img-34"></td>
                    <td>
                        <a href="#">
                            <span class="glyphicon glyphicon-play-circle"></span>
                        </a>
                    </td>
                    <td>Sheeple Original Mix</td>
                    <td>Green Velvet, Prok & Fitch</td>
                    <td>Relief</td>
                    <td>Tech House</td>
                    <td  class="hidden-xs">2016-11-18</td>
                    <td>
                        <a href="#" class="upload">
                            <span class="glyphicon glyphicon-upload"></span>
                        </a>
                    </td>
                  </tr>
                </tbody>
              </table> 
          </div>
        </div>

      <footer>
        <div class="row">
          <div class="col-lg-12">
              
          </div>
        </div>

      </footer>


    </div>

@endsection
    
