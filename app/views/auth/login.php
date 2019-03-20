{% extends 'templates/default.php' %}

{% block title %}Login{% endblock %}

{% block content %}
  <div class="center-align">
<pre>
{% for key, item in errors.all() %}
 <p class="red-text">{{ item }}</p> 
{% endfor %}
</pre>
</div>  

<div class="row container">
    <form action="{{ urlFor('login.post') }}" method="post" autocomplete="off" class="col s12">

    <div class="row">
        <div class="input-field col s3">
          <input id="identifier" type="text" name="identifier" class="validate">
          <label for="identifier">Username/Email</label>
        </div>
      </div>


      <div class="row">
        <div class="input-field col s3">
          <input id="password" type="password" name="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>

    <div class="row">
      <div class="col s3">
      <p>
      <label>
        <input type="checkbox" name="remember" id="remember" />
        <span>Remember me</span>
      </label>
    </p>
    </div>
    </div>

    <div class="row">
          <div class="col s3">
        <button class="btn waves-effect waves-light" type="submit" name="action">Login</button>
          </div>
        </div>
        <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">

    </form>
</div>









<!--
    <form action="{{ urlFor('login.post') }}" method="post" autocomplete="off">
    <div>
    <label for="identifier">Username/email</label>
    <input type="text" name="identifier" id="identifier">
    </div>

    <div>
        <label for="paswsword">Password</label>
        <input type="password" name="password" id="password">
    </div>
  <div>
    <input type="checkbox" name="remember" id="remember"> <label for="remember">Remember me</label>
  </div>
    <div>
    <input type="submit" value="Login">
    </div>
    <a href="{{ urlFor('password.recover') }}">Forgot your password?</a>
      <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
    </form>
    -->
{% endblock %}