@extends('layouts.app')


@section('content')

<div class="section_1">
    <a href="{{ route('register-heros') }}" class="pre_reg_btn w-inline-block">
        <h1 class="d_man_p_link">Delivery Hero Pre Registration</h1>
    </a>
    <div class="section_2--w container w-row">
        <div class="s2_left_bar w-col w-col-8">
            <div class="s2_location_badge">
                <img src="{{ asset('img/marker.png') }}" width="24" alt="" class="location_icon" />
                <p class="location_text">Bhola Sadar, Bhola</p>
            </div>
            <div class="s2_heading_bar">
                <h1 class="s2_heading">Discover Nearest Restaurant <br />From Your Location.</h1>
            </div>
            <div class="s2_map_search">
                <div class="c_map_input w-form">
                    <form id="geo_location" name="form-Map" data-name="Map" redirect="google.com"
                        data-redirect="google.com" action="http://google.com" class="customer_map_form"><input
                            type="text" class="location_holder_box w-input" maxlength="256" name="name" data-name="name"
                            placeholder="Locate Your Location From Map" id="name" required="" /><input type="submit"
                            value="" class="submit-button w-button" /></form>

                </div>
                <a href="#" class="location_select_btn">Restaurants</a>
            </div>
            <div class="s2_top_foods">
                <div class="top_food_rows w-row">
                    <div class="top_food w-col w-col-4 w-col-medium-4 w-col-small-small-stack w-col-tiny-tiny-stack">
                        <div class="food_card">
                            <div class="food_card_image"><img src="{{ asset('img/food-1.jpeg') }}"
                                    alt="" class="image" /></div>
                            <div class="food_card_info">
                                <p class="paragraph w-clearfix"><span class="text-span-2"><strong
                                            class="bold-text">Color Lounge</strong></span><span class="text-span">5/5
                                        (<strong>268</strong>)</span></p>
                                <h2 class="heading">Haji Shahi </h2>
                            </div>
                        </div>
                    </div>
                    <div class="top_food w-col w-col-4 w-col-medium-4 w-col-small-small-stack w-col-tiny-tiny-stack">
                        <div class="food_card">
                            <div class="food_card_image"><img src="{{ asset('img/food-2.jpeg') }}"
                                    alt="" class="image" /></div>
                            <div class="food_card_info">
                                <p class="paragraph w-clearfix"><span class="text-span-2"><strong
                                            class="bold-text">Color Lounge</strong></span><span class="text-span">5/5
                                        (<strong>268</strong>)</span></p>
                                <h2 class="heading">Haji Shahi </h2>
                            </div>
                        </div>
                    </div>
                    <div class="top_food w-col w-col-4 w-col-medium-4 w-col-small-small-stack w-col-tiny-tiny-stack">
                        <div class="food_card">
                            <div class="food_card_image"><img src="{{ asset('img/food-3.jpeg') }}"
                                    alt="" class="image" /></div>
                            <div class="food_card_info">
                                <p class="paragraph w-clearfix"><span class="text-span-2"><strong
                                            class="bold-text">Color Lounge</strong></span><span class="text-span">5/5
                                        (<strong>268</strong>)</span></p>
                                <h2 class="heading">Haji Shahi </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="s2_right_bar w-col w-col-4"></div>
    </div>
</div>
<p class="website_badge">this website is under development<br />nothing is working properly. <br />this page only for
    <br />our delivery hero pre registration</p>
<div class="secrion_3">
    <div class="un_bord">
        <h1 class="our_colaa">Website Under Development<br />Working Stage 2%.<br />We Are Trying Our
            Best.<br />‍<br />If you are a free PHP Developer<br />or Web Designer you can<br /><a
                href="{{ route('adddev') }}" class="link">Contribute</a></h1>
    </div>
</div>

@endsection
