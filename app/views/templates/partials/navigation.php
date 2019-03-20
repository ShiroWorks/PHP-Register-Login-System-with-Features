


<ul id="slide-out" class="sidenav sidenav-fixed">
  <li><div class="user-view">
    <div class="background">

    
      <img src="/app/images/navbackgroundimage.jpg">
    </div>
    {% if auth %}
    <a href="#user"><img class="circle" src="{{ auth.getAvatarUrl(30) }}"></a>
    
    <a href="#name"><span class="white-text name">{{ auth.getFullNameOrUsername() }}</span></a>
    <a href="#email"><span class="white-text email">{{ auth.email }}</span></a>
  </div></li>
  {% endif %}
  
  <li><a class="waves-effect" href="{{ urlFor('home') }}">Home</a></li>

{% if auth %}
  
<li><a class="waves-effect" href="{{ urlFor('logout') }}">Log Out</a></li>
<li><a class="waves-effect" href="{{ urlFor('user.profile', {username: auth.username}) }}">Your Profile</a></li>
<li><a class="waves-effect" href="{{ urlFor('password.change') }}">Change Passwors</a></li>
<li><a class="waves-effect" href="{{ urlFor('account.profile') }}">Update Profile</a></li>
<li><a class="waves-effect" href="{{ urlFor('user.all') }}">All Users</a></li>
{% if auth.isAdmin() %}
<li><a class="waves-effect" href="{{ urlFor('admin.example') }}">Admin Area</a></li>
{% endif %}
  {% else %}
<li><a class="waves-effect" href="{{ urlFor('register') }}">Register</a></li>
<li><a class="waves-effect" href="{{ urlFor('login') }}">Login</a></li>


{% endif %}



</ul>








<!--
{% if auth %}
    Hello, {{ auth.getFullNameOrUsername() }}!
    <img src="{{ auth.getAvatarUrl(30) }}" alt="Your avatar"> 
{% endif %}

<ul>
    <li><a href="{{ urlFor('home') }}">Home</a></li>


    {% if auth %}
        <li><a href="{{ urlFor('logout') }}">Log out</a></li>
        <li><a href="{{ urlFor('user.profile', {username: auth.username}) }}">Your profile</a></li>
        <li><a href="{{ urlFor('password.change') }}">Change password</a></li>
        <li><a href="{{ urlFor('account.profile') }}">Update profile</a></li>
        {% if auth.isAdmin() %}
        <li><a href="{{ urlFor('admin.example') }}">Admin area</a></li>
        {% endif %}
    {% else %}
    <li><a href="{{ urlFor('register') }}">Register</a></li>
    <li><a href="{{ urlFor('login') }}">login</a></li>
    {% endif %}
    <li><a href="{{ urlFor('user.all') }}">All users</a></li>

   

</ul>
-->
