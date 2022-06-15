@extends('layouts.master')

@section('social')
<div class="fanpage-fb">
    <img src="./img/Screenshot 2022-03-26 192930.png" alt="fanpage-fb">
</div>
<div class="container-countdown">
    <h2>Volgende festival DaFest!</h2>
    <h3>13, 14, 15 Mei 2022,van Termunt Tervuren</h3>
    <div id="countdown">
        <ul>
            <li class="countdown-element"><span id="days"></span>
                <p>days</p>
            </li>
            <li class="countdown-element"><span id="hours"></span>
                <p>Hours</p>
            </li>
            <li class="countdown-element"><span id="minutes"></span>
                <p>Minutes</p>
            </li>
            <li class="countdown-element"><span id="seconds"></span>
                <p>Seconds</p>
            </li>
        </ul>
    </div>
    <footer>
        <a href="#"><button>Koop Nu tickets</button></a>
        <a href="#"><img src="./img/facebook.png" class="social-icon" alt="facebook-icon"></a>
        <a href="#"><img src="./img/instagram.png" class="social-icon" alt="intagram-icon"></a>
    </footer>
</div>
@endsection

@section('line-up')
<div id="line-up">
    <div id='line-up-filter'>
        <button class='dag-een'>13 MEI</button>
        <button class='dag-twee'>14 MEI</button>
        <button class='dag-drie'>15 MEI</button>
    </div>

    <div id='posts'>
        <div class='post dag-een'>
            <figure>
                <div>
                    <img src="./img/7.png" alt="">
                    <p class="post-name">Yves Segers</p>
                    <p class="post-uur">18:00</p>
                </div>
                <div>
                    <img src="./img/7.png" alt="">
                    <p class="post-name">Feest Dj Lucki Luc</p>
                    <p class="post-uur">18:40</p>
                </div>
                <div>
                    <img src="./img/7.png" alt="">
                    <p class="post-name">2 Fabiola</p>
                    <p class="post-uur">19:30</p>
                </div>
                <div>
                    <img src="./img/7.png" alt="">
                    <p class="post-name">Sam Gooris</p>
                    <p class="post-uur">20:25</p>
                </div>
                <div>
                    <img src="./img/7.png" alt="">
                    <p class="post-name">Gebroeders Ko</p>
                    <p class="post-uur">21:00</p>
                </div>
                <div>
                    <img src="./img/7.png" alt="">
                    <p class="post-name">Ronny Retro</p>
                    <p class="post-uur">21:30</p>
                </div>
            </figure>
        </div>
        <div class='post dag-twee' style="display: none">
            <figure>
                <div>
                    <img src="./img/8.png" alt="">
                    <p class="post-name">Yves Segers</p>
                    <p class="post-uur">18:00</p>
                </div>
                <div>
                    <img src="./img/8.png" alt="">
                    <p class="post-name">Feest Dj Lucki Luc</p>
                    <p class="post-uur">18:40</p>
                </div>
                <div>
                    <img src="./img/8.png" alt="">
                    <p class="post-name">2 Fabiola</p>
                    <p class="post-uur">19:30</p>
                </div>
                <div>
                    <img src="./img/8.png" alt="">
                    <p class="post-name">Sam Gooris</p>
                    <p class="post-uur">20:25</p>
                </div>
                <div>
                    <img src="./img/8.png" alt="">
                    <p class="post-name">Gebroeders Ko</p>
                    <p class="post-uur">21:00</p>
                </div>
                <div>
                    <img src="./img/8.png" alt="">
                    <p class="post-name">Ronny Retro</p>
                    <p class="post-uur">21:30</p>
                </div>
            </figure>
        </div>
        <div class='post dag-drie' style="display: none">
            <figure>
                <div>
                    <img src="./img/10.png" alt="">
                    <p class="post-name">Yves Segers</p>
                    <p class="post-uur">18:00</p>
                </div>
                <div>
                    <img src="./img/10.png" alt="">
                    <p class="post-name">Feest Dj Lucki Luc</p>
                    <p class="post-uur">18:40</p>
                </div>
                <div>
                    <img src="./img/10.png" alt="">
                    <p class="post-name">2 Fabiola</p>
                    <p class="post-uur">19:30</p>
                </div>
                <div>
                    <img src="./img/10.png" alt="">
                    <p class="post-name">Sam Gooris</p>
                    <p class="post-uur">20:25</p>
                </div>
                <div>
                    <img src="./img/10.png" alt="">
                    <p class="post-name">Gebroeders Ko</p>
                    <p class="post-uur">21:00</p>
                </div>
                <div>
                    <img src="./img/10.png" alt="">
                    <p class="post-name">Ronny Retro</p>
                    <p class="post-uur">21:30</p>
                </div>
            </figure>
        </div>
    </div>
    <div class="h3-background">
        <h3>Line Up</h3>
    </div>
</div>
@endsection

@section('ticket')
<div id="ticket-rectangle">
    <div id="ticker-rectangle-color"></div>
</div>
<div class="container-tickets">
    <div class="boxen-tickets">
        <h3>Kies je Tickets</h3>
        <section class="box-ticket">
            <h4>ticket name</h4>
            <h5>€50<span>.00</span></h5>
            <a href="#">
                <button>koop ticket</button>
            </a>
            <section>
                <p>Ticket voor eerste dag van het festival</p>
                <p>13 Mei 2022, van Termunt Tervuren</p>
            </section>
        </section>
        <section class="box-ticket">
            <h4>ticket name</h4>
            <h5>€50<span>.00</span></h5>
            <a href="#">
                <button>koop ticket</button>
            </a>
            <section>
                <p>Ticket voor tweede dag van het festival</p>
                <p>14 Mei 2022, van Termunt Tervuren</p>
            </section>
        </section>
        <section class="box-ticket">
            <h4>ticket name</h4>
            <h5>€50<span>.00</span></h5>
            <a href="#">
                <button>koop ticket</button>
            </a>
            <section>
                <p>Ticket voor tweede dag van het festival</p>
                <p>14 Mei 2022, van Termunt Tervuren</p>
            </section>
        </section>
    </div>
</div>
<div class="koop-tickets">
    <a href="">
        <p>Bekijk meer tickets</p>
        <i class="fa-solid fa-play"></i>
    </a>
</div>
@endsection

@section('gallery')
<div class="item-a"></div>
<div class="h3-background">
    <h3>Foto's</h3>
</div>
<div class="item-c"></div>
<div class="item-d"></div>
<div class="item-e">
    <p>Dafest</p>
</div>
<div class="item-f">
    <p>Openlucht <br> festival</p>
</div>
<div class="item-g"></div>
<div class="item-h"></div>
<div class="item-i"></div>
<div class="item-j"></div>
@endsection

@section('partners')
<div id="partners-link">
    <div class="container-partners">
        <h3>Onze Partners</h3>

        <div class="title-partners">
            <h4>Premium Partners</h4>
        </div>
        <div class="boxen-partners">
            <div class="box-partners-border">
                <div class="box-partners"><img src="./img/AMPLIFON.png" alt=""></div>
            </div>
            <div class="box-partners-border">
                <div class="box-partners"><img src="./img/creathings.png" alt=""></div>
            </div>
            <div class="box-partners-border">
                <div class="box-partners"><img src="./img/dearchitecten.png" alt=""></div>
            </div>
            <div class="box-partners-border">
                <div class="box-partners"><img src="./img/dewolf.png" alt=""></div>
            </div>
            <div class="box-partners-border">
                <div class="box-partners"><img src="./img/dlstageworks.png" alt=""></div>
            </div>
            <div class="box-partners-border">
                <div class="box-partners"><img src="./img/Geersdevos.png" alt=""></div>
            </div>
            <div class="box-partners-border">
                <div class="box-partners"><img src="./img/klusjesmangeert.png" alt=""></div>
            </div>
            <div class="box-partners-border">
                <div class="box-partners"><img src="./img/winforlife.png" alt=""></div>
            </div>
            <div class="box-partners-border">
                <div class="box-partners"><img src="./img/krivaro.png" alt=""></div>
            </div>
            <div class="box-partners-border">
                <div class="box-partners"><img src="./img/NicAssurBvba.png" alt=""></div>
            </div>
            <div class="box-partners-border">
                <div class="box-partners"><img src="./img/PlanBPlus.jpg" alt=""></div>
            </div>
            <div class="box-partners-border">
                <div class="box-partners"><img src="./img/VerzekeringenPeeters.png" alt=""></div>
            </div>
        </div>
        <div class="partners-rectangle"></div>

        <div class="title-partners">
            <h4>Big partners</h4>
        </div>
        <div class="boxen-partners">
            <div class="box-partners-border">
                <div class="box-partners"><img src="./img/AMPLIFON.png" alt=""></div>
            </div>
            <div class="box-partners-border">
                <div class="box-partners"><img src="./img/creathings.png" alt=""></div>
            </div>
            <div class="box-partners-border">
                <div class="box-partners"><img src="./img/dearchitecten.png" alt=""></div>
            </div>
            <div class="box-partners-border">
                <div class="box-partners"><img src="./img/dewolf.png" alt=""></div>
            </div>
            <div class="box-partners-border">
                <div class="box-partners"><img src="./img/dlstageworks.png" alt=""></div>
            </div>
            <div class="box-partners-border">
                <div class="box-partners"><img src="./img/Geersdevos.png" alt=""></div>
            </div>
            <div class="box-partners-border">
                <div class="box-partners"><img src="./img/klusjesmangeert.png" alt=""></div>
            </div>
            <div class="box-partners-border">
                <div class="box-partners"><img src="./img/winforlife.png" alt=""></div>
            </div>
            <div class="box-partners-border">
                <div class="box-partners"><img src="./img/krivaro.png" alt=""></div>
            </div>
        </div>
        <div class="partners-rectangle"></div>

        <div class="title-partners">
            <h4>Partners</h4>
        </div>
        <div class="boxen-partners">
            <div class="box-partners-border">
                <div class="box-partners"><img src="./img/AMPLIFON.png" alt=""></div>
            </div>
            <div class="box-partners-border">
                <div class="box-partners"><img src="./img/creathings.png" alt=""></div>
            </div>
            <div class="box-partners-border">
                <div class="box-partners"><img src="./img/dearchitecten.png" alt=""></div>
            </div>
        </div>
        <div class="partners-rectangle"></div>


        <div class="title-partners">
            <h4>Drinks &amp; Media <br> partners</h4>
        </div>
        <div class="boxen-partners">
            <div class="box-partners-border">
                <div class="box-partners"><img src="./img/AMPLIFON.png" alt=""></div>
            </div>
            <div class="box-partners-border">
                <div class="box-partners"><img src="./img/creathings.png" alt=""></div>
            </div>
            <div class="box-partners-border">
                <div class="box-partners"><img src="./img/dearchitecten.png" alt=""></div>
            </div>
            <div class="box-partners-border">
                <div class="box-partners"><img src="./img/dewolf.png" alt=""></div>
            </div>
            <div class="box-partners-border">
                <div class="box-partners"><img src="./img/dlstageworks.png" alt=""></div>
            </div>
        </div>
    </div>
    <div class="partners-rectangle"></div>
    @endsection