<section class="section section-stats center">
    <div class="row search_bar">
        <form class="customsearch" method="POST" action="/search/User">
            {{ csrf_field() }}

            <div class="customsearch__item"><input class="custom-input custom-width" type="text" name="search_term"
                    id="search_term" placeholder="Provide IPPIS or First Name">
            </div>
            <div class="customsearch__item"><button class="custom-input" type="submit">Search</button></div>
        </form>
    </div>
    {{-- <div class="row">
        <div class="col s12 m6 l3">
            <div class="card-panel blue lighten-1 white-text center">
                <i class="material-icons">insert_emoticon</i>
                <h6>Active Users</h6>
                <h5 class="count">768</h5>
                <div class="progress grey lighten-1">
                    <div class="determinate white" style="width:40%;"></div>
                </div>
            </div>
        </div>

        <div class="col s12 m6 l3">
            <div class="card-panel teal lighten-1 white-text center">
                <i class="material-icons">mode_edit</i>
                <h6>Deductions</h6>
                <h5 class="count">14768000</h5>
                <div class="progress grey lighten-1">
                    <div class="determinate white" style="width:40%;"></div>
                </div>
            </div>
        </div>

        <div class="col s12 m6 l3">
            <div class="card-panel blue lighten-1 white-text center">
                <i class="material-icons">insert_emoticon</i>
                <h6>Target Savings</h6>
                <h5 class="count">12768000</h5>
                <div class="progress grey lighten-1">
                    <div class="determinate white" style="width:20%;"></div>
                </div>
            </div>
        </div>

        <div class="col s12 m6 l3">
            <div class="card-panel blue lighten-1 white-text center">
                <i class="material-icons">insert_emoticon</i>
                <h6>Loan Applications</h6>
                <h5 class="count">768</h5>
                <div class="progress grey lighten-1">
                    <div class="determinate white" style="width:40%;"></div>
                </div>
            </div>
        </div>
    </div> --}}
</section>