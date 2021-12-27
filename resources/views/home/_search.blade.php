<div id="fh5co-search-map">
    <div class="search-property">
        <div class="s-holder">
            <h2>Search Properties</h2>
            <div class="row">
                <div class="col-xxs-12 col-xs-12">
                    <div class="input-field">
                        <label for="from">Keyword:</label>
                        <input type="text" class="form-control" id="from-place" placeholder="Any"/>
                    </div>
                </div>
                <!--
                <div class="col-xxs-12 col-xs-12">
                    <section>
                        <label for="class">Property Status:</label>
                        <select class="cs-select cs-skin-border">
                            <option value="" disabled selected>Any</option>
                            <option value="1">Rent</option>
                            <option value="2">Sale</option>
                        </select>
                    </section>
                </div>
                -->
                <div class="col-xxs-12 col-xs-12">
                    <section>
                        <label for="class">Property Type:</label>
                        <select class="cs-select cs-skin-border input-half">
                            <option value="" disabled selected>Any</option>
                            <option value="1">Building</option>
                            <option value="2">Office</option>
                        </select>
                    </section>
                </div>
                <div class="col-xxs-12 col-xs-12">
                    <div class="input-field">
                        <label for="from">Location:</label>
                        <input type="text" class="form-control" id="from-place" placeholder="Any"/>
                    </div>
                </div>
                <div class="col-xxs-12 col-xs-12">
                    <section>
                        <label for="class">Price:</label>
                        <div class="wide">
                            <select class="cs-select cs-select-half cs-skin-border input-half">
                                <option value="" disabled selected>Any</option>
                                <option value="1">Building</option>
                                <option value="2">Office</option>
                            </select>
                            <select class="cs-select cs-select-half cs-skin-border input-half">
                                <option value="" disabled selected>Any</option>
                                <option value="1">Building</option>
                                <option value="2">Office</option>
                            </select>
                        </div>
                    </section>
                </div>
                <div class="col-xxs-12 col-xs-12">
                    <section>
                        <label for="class">Rooms:</label>
                        <div class="wide">
                            <select class="cs-select cs-select-half cs-skin-border input-half">
                                <option value="" disabled selected>Any</option>
                                <option value="1">Building</option>
                                <option value="2">Office</option>
                            </select>
                            <select class="cs-select cs-select-half cs-skin-border input-half">
                                <option value="" disabled selected>Any</option>
                                <option value="1">Building</option>
                                <option value="2">Office</option>
                            </select>
                        </div>
                    </section>
                </div>
                <div class="col-xxs-12 col-xs-12">
                    <section>
                        <label for="class">Bathrooms:</label>
                        <div class="wide">
                            <select class="cs-select cs-select-half cs-skin-border input-half">
                                <option value="" disabled selected>Any</option>
                                <option value="1">Building</option>
                                <option value="2">Office</option>
                            </select>
                            <select class="cs-select cs-select-half cs-skin-border input-half">
                                <option value="" disabled selected>Any</option>
                                <option value="1">Building</option>
                                <option value="2">Office</option>
                            </select>
                        </div>
                    </section>
                </div>
                <div class="col-xxs-12 col-xs-12">
                    <section>
                        <label for="class">Area:</label>
                        <div class="wide">
                            <select class="cs-select cs-select-half cs-skin-border input-half">
                                <option value="" disabled selected>Any</option>
                                <option value="1">Building</option>
                                <option value="2">Office</option>
                            </select>
                            <select class="cs-select cs-select-half cs-skin-border input-half">
                                <option value="" disabled selected>Any</option>
                                <option value="1">Building</option>
                                <option value="2">Office</option>
                            </select>
                        </div>
                    </section>
                </div>
                <!--
                <div class="col-xxs-12 col-xs-12">
                    <section>
                        <label for="class">Parking spots:</label>
                        <div class="wide">
                            <select class="cs-select cs-select-half cs-skin-border input-half">
                                <option value="" disabled selected>Any</option>
                                <option value="1">Building</option>
                                <option value="2">Office</option>
                            </select>
                            <select class="cs-select cs-select-half cs-skin-border input-half">
                                <option value="" disabled selected>Any</option>
                                <option value="1">Building</option>
                                <option value="2">Office</option>
                            </select>
                        </div>
                    </section>
                </div>
                -->
                <div class="col-xxs-12 col-xs-12 text-center">
                    <p><a class="btn btn-primary btn-lg" href="#">Learn More</a></p>
                </div>
                <br><br>
                <div class="s-holder">
                    <h4><span class="glyphicon glyphicon-search"></span> Search for</h4>
                    <form action="{{route('gethome')}}" method="post">
                        @csrf
                        <table>
                            <div class="row">
                            <tr >
                                <td>@livewire('search')<br></td><br>
                            </tr></div>
                            <tr style="text-align:left">
                                <td>
                                    <div class="row">
                                        <p><a class="btn btn-primary btn-lg" href="#">Learn More</a></p>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                @section('footerjs') <!--diğer yerlerde bu scripte ihtiyaç var bunu  kullanmak için-->
                    @livewireScripts
                    @endsection
                </div>

            </div>
        </div>
    </div>
    <div class="map" style="background-image: url({{ asset('assets')}}/images/cover_bg_1.jpg);">
    </div>
</div>

