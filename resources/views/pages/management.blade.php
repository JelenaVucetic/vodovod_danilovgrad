@extends('layouts.master')

@section('content')
<link rel="stylesheet" href="/css/about.css">

        <div class="about">
              
          <!-- Tab links -->
          <div class="tab">
            <button class="tablinks" onclick="openType(event, 'management')">Menadžment</button>
            <button class="tablinks" onclick="openType(event, 'odbor')">Odbor direktora</button>
          </div>

          <!-- Tab content -->
          <div id="management" class="tabcontent">
            <div class="row">
              <div class="col-l-12 col-xl-12 col-sm-12 col-xs-12 mb-5 p-0">
                <div class="card">
                  <div class="card-header">
                  <h3>Menadžment</h3>   
                    </div>
                  <div class="card-body">
                    <h5 class="card-title">Izvršni direktor</h5>
                    <p class="card-text">
                      Predrag Kalezić, dipl.pravnik<br>
                      tel/fax: 020/811-550<br>
                      e-mail: predrag.kalezic@vikdg.me <br>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="odbor" class="tabcontent">
            <div class="row">
              <div class="col-l-12 col-xl-12 col-sm-12 col-xs-12 p-0">
                <div class="card">
                  <div class="card-header">
                  <h3>Odbor direktora</h3>   
                    </div>
                  <div class="card-body">
                    <h5 class="card-title">Odbor direktora DOO „Vodovod i kanalizacija“ Danilovgrad čine 5 članova i to:</h5>
                    <p class="card-text">
                        1.	Mr Goran Zeković, Predsjednik Odbora direktora<br>
                        2.	Vukota Stanišić, član<br>
                        3.	Dario Đuričković, član<br>
                        4.	Dražen Kalezić, član<br>
                        5.	Ljubomir Stajović, član
                        <br>

                    </p>
                  </div>
                </div>
              </div>
          </div>
          </div>


        </div>

        <script>
          function openType(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
              tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
              tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
          }
          </script>
             
            @endsection  