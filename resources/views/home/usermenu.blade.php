@auth
<div class="aside">
    <h3 class="aside-title" style="color:#5bb75b; font-weight: bold">User Panel</h3>
    <br>
    <ul class="list-links">
        <li><a href="{{route('myprofile')}}">My Profile</a> </li>
        <hr><br>
        <li><a href="{{route('user_products')}}">My Homes</a> </li>
        <hr><br>
        <li><a href="#">My Reviews</a> </li>
        <hr><br>
        <li><a href="{{route('logout')}}">Logout</a> </li>

    </ul>
</div>
@endauth
