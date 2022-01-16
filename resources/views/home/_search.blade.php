<div id="fh5co-search-map">
    <div class="search-property">
        <div class="s-holder">
            <h2 class="glyphicon glyphicon-search">Search Properties</h2>
            <div class="row">
                <div class="s-holder">

                    <form action="{{route('gethome')}}" method="post">
                        @csrf
                        <table style="width: 500px;">
                            <tr>
                                <td>@livewire('search')<br></td>
                            </tr>
                            <br>
                            <tr style="text-align:right">
                                <td>
                                    <br>
                                    <button class="btn btn-primary">Find Now</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                    <!--diğer yerlerde bu scripte ihtiyaç var bunu  kullanmak için-->
                    @livewireScripts


                </div>

            </div>
        </div>
    </div>
    <div class="map" style="background-image: url({{ asset('assets')}}/images/cover_bg_1.jpg);">
    </div>
</div>

