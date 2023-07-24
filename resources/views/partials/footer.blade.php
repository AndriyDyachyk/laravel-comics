<footer>
        <section id="shops">
            <div class="container">
            @foreach($shops as $shop)
                <a href="shop.url" class="shop_card">
                    <img src="{{ Vite::asset($shop['icon']) }}" alt="{{ $shop['name'] }}">
                    <p>{{ $shop['name']}}</p>
                </a>
            @endforeach
            </div>
        </section>
        <section id="terms_and_conditions">
            <div class="container">
                <div id="terms_list">
                @foreach($terms as $term) 
                    <ul>
                        <h4>{{ $term['listTitle']}}</h4>
                        @foreach($term['list'] as $item)
                        <li><a href="item.url">{{ $item['element'] }}</a></li>
                        @endforeach
                    </ul>
                @endforeach
                </div>
                <div class="dc_bg">
                    <img src="{{ Vite::asset('resources/img/dc-logo-bg.png')}}" alt="">
                </div>
            </div>
        </section>
        <section id="contacts">
            <div class="container">
                <a href="" id="sign_up">SIGN-UP NOW!</a>
                <div id="follow">
                    <h3>FOLLOW US</h3>
                    @foreach($social as $platform)
                    <a href="platform.url" >
                        <img src="{{ Vite::asset($platform['icon']) }}" alt="{{ $platform['name'] }}">
                    </a>
                    @endforeach
                </div>
            </div>
        </section>
    </footer>