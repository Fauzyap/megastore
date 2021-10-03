@extends('layouts.main')

@section('page-wrapper')
    

<div class="page-wrapper">
    <div class="carousel" data-flickity='{ "freeScroll": true, "wrapAround": true }'>
      <a href="{{ url('topupml') }}"><div class="carousel-cell1"><img src="img/ML.jpg" alt=""></div></a>
      <a href="{{ url('topuppubgm') }}"><div class="carousel-cell2"><img src="img/pubgm.jpg" alt=""></div></a>
      <a href="{{ url('topupff') }}"><div class="carousel-cell3"><img src="img/ff.jpg" alt=""></div></a>
      <a href="{{ url('topupcodm') }}"><div class="carousel-cell4"><img src="img/codm.jpg" alt=""></div></a>
          <a href="{{ url('topupgenshin') }}"><div class="carousel-cell5"><img src="img/genshin.jpg" alt=""></div></a>
    </div>

    <div class="mt-5 pt-2 px-3">
      <h2 style="font-family: 'Open Sans', sans-serif; font-weight: bold; color: #FFFFFF;">Popular Top up Games</h2>
      <div class="row py-2">
        <div class="col">
          <div class="card mt-4">
            <a href="{{ url('topupgenshin') }}">
              <div class="card-body">
                <img src="img/ico/genshin.png" alt="" class="ico">
                <h6>Genshin Impact</h6>
              </div>
            </div>
          </a>
        </div>
        <div class="col">
          <div class="card mt-4">
            <a href="{{ url('topupml') }}">
              <div class="card-body">
                <img src="img/ico/emel.png" alt="" class="ico">
                <h6>Mobile Legends</h6>
              </div>
            </div>
          </a>
        </div>
        <div class="col">
          <div class="card mt-4">
            <a href="{{ url('topupff') }}">
              <div class="card-body">
                <img src="img/ico/ff.png" alt="" class="ico">
                <h6>Free Fire</h6>
              </div>
            </div>
          </a>
        </div>
        <div class="col">
          <div class="card mt-4">
            <a href="{{ url('topuppubgm') }}">
              <div class="card-body">
                <img src="img/ico/pubg.png" alt="" class="ico">
                <h6>PUBG Mobile</h6>
              </div>
            </div>
          </a>
        </div>
        <div class="col">
          <div class="card mt-4">
            <a href="{{ url('topupcodm') }}">
              <div class="card-body">
                <img src="img/ico/cod.png" alt="" class="ico">
                <h6>Call Of Duty Mobile</h6>
              </div>
            </div>
          </a>
        </div>
        <div class="col">
          <div class="card mt-4">
            <a href="{{ url('topuphi') }}">
              <div class="card-body">
                <img src="img/ico/honkai.png" alt="" class="ico">
                <h6>Honkai Impact 3rd</h6>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
    
    <div class="mt-5 pt-2 px-3">
      <h2 style="font-family: 'Open Sans', sans-serif; font-weight: bold; color: #FFFFFF;">All Top up Games</h2>
      <div class="row py-2">
        <div class="col">
          <div class="card mt-4">
            <a href="{{ url('topuppubgm') }}">
              <div class="card-body">
                <img src="img/ico/pubg.png" alt="" class="ico">
                <h6>PUBG Mobile</h6>
              </div>
            </div>
          </a>
        </div>
        <div class="col">
          <div class="card mt-4">
            <a href="{{ url('topupiski') }}">
              <div class="card-body">
                <img src="img/ico/island.png" alt="" class="ico">
                <h6>Island King</h6>
              </div>
            </div>
          </a>
        </div>
        <div class="col">
          <div class="card mt-4">
            <a href="{{ url('topupla') }}">
              <div class="card-body">
                <img src="img/ico/life.png" alt="" class="ico">
                <h6>Life After</h6>
              </div>
            </div>
          </a>
        </div>
        <div class="col">
          <div class="card mt-4">
            <a href="{{ url('topuphido') }}">
              <div class="card-body">
                <img src="img/ico/higgs.png" alt="" class="ico">
                <h6>Higgs Domino</h6>
              </div>
            </div>
          </a>
        </div>
        <div class="col">
          <div class="card mt-4">
            <a href="{{ url('topupml') }}">
              <div class="card-body">
                <img src="img/ico/emel.png" alt="" class="ico">
                <h6>Mobile Legends</h6>
              </div>
            </div>
          </a>
        </div>
        <div class="col">
          <div class="card mt-4">
            <a href="{{ url('topupff') }}">
              <div class="card-body">
                <img src="img/ico/ff.png" alt="" class="ico">
                <h6>Free Fire</h6>
              </div>
            </div>
          </a>
        </div>
        <div class="container-lg">
          <div class="row py-2 ml-5">
            <div class="col">
              <div class="card">
                  <a href="{{ url('topup8ball') }}">
                  <div class="card-body">
                    <img src="img/ico/8ball.png" alt="" class="ico">
                    <h6>8 Ball Pool</h6>
                  </div>
                </div>
              </a>
            </div>
            <div class="col">
              <div class="card">
                <a href="{{ url('topuponmyouji') }}">
                  <div class="card-body">
                    <img src="img/ico/omnyoji.png" alt="" class="ico">
                    <h6>Onmyoji Arena</h6>
                  </div>
                </div>
              </a>
            </div>
            <div class="col">
              <div class="card">
                <a href="{{ url('topupgenshin') }}">
                  <div class="card-body">
                    <img src="img/ico/genshin.png" alt="" class="ico">
                    <h6>Genshin Impact</h6>
                  </div>
                </div>
              </a>
            </div>
            <div class="col">
              <div class="card">
                <a href="{{ url('topupazur') }}">
                  <div class="card-body">
                    <img src="img/ico/azur.png" alt="" class="ico">
                    <h6>Azur Lane</h6>
                  </div>
                </div>
              </a>
            </div>
            <div class="col">
              <div class="card">
                <a href="{{ url('topupcodm') }}">
                  <div class="card-body">
                    <img src="img/ico/cod.png" alt="" class="ico">
                    <h6>Call Of Duty Mobile</h6>
                  </div>
                </div>
              </a>
            </div>
            <div class="col">
              <div class="card">
                <a href="{{ url('topupsultan') }}">
                  <div class="card-body">
                    <img src="img/ico/sultan.png" alt="" class="ico">
                    <h6>Game of Sultans</h6>
                  </div>
                </div>
              </a>
            </div>
          </div>
          
      </div>
      <div class="container-lg">
        <div class="row py-2 ml-5">
          <div class="col">
            <div class="card">
              <a href="{{ url('topupmarvel') }}">
                <div class="card-body">
                  <img src="img/ico/marvel.png" alt="" class="ico">
                  <h6>Marvel Future Fight</h6>
                </div>
              </div>
            </a>
          </div>
          <div class="col">
            <div class="card">
              <a href="{{ url('topuphi') }}">
                <div class="card-body">
                  <img src="img/ico/honkai.png" alt="" class="ico">
                  <h6>Honkai Impact 3rd</h6>
                </div>
              </div>
            </a>
          </div>
          <div class="col">
            <div class="card">
              <a href="{{ url('topupidentity') }}">
                <div class="card-body">
                  <img src="img/ico/identity.png" alt="" class="ico">
                  <h6>Identity V</h6>
                </div>
              </div>
            </a>
          </div>
          <div class="col">
            <div class="card">
                <a href="{{ url('topuplol') }}">
                <div class="card-body">
                  <img src="img/ico/wildrift.png" alt="" class="ico">
                  <h6>LoL Wild Rift</h6>
                </div>
              </div>
            </a>
          </div>
          <div class="col">
            <div class="card">
              <a href="{{ url('topupchess') }}">
                <div class="card-body">
                  <img src="img/ico/chess.png" alt="" class="ico">
                  <h6>Auto Chess</h6>
                </div>
              </div>
            </a>
          </div>
          <div class="col">
            <div class="card">
              <a href="{{ url('topuprox') }}">
                <div class="card-body">
                  <img src="img/ico/ragnarok.png" alt="" class="ico">
                  <h6 style="font-size: 10px">Ragnarok x: Next Generation</h6>
                </div>
              </div>
            </a>
          </div>
        </div>
    </div>
      </div>
    </div>
    @endsection
  
    