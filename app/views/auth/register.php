
{% extends 'templates/default.php' %}

{% block title %}Register{% endblock %}

{% block content %}

<div class="container">
<pre>
{% for key, item in errors.all() %}
 <p class="red-text">{{ item }}  </p>
{% endfor %}
</pre>
</div>
<div class="row container">
    <form class="col s12" action="{{ urlFor('register.post') }}" method="post" autocomplete="off">

    <div class="row">
        <div class="input-field col s3">
          <input id="email" type="email" name="email" class="validate" {% if request.post('email') %} value="{{ request.post('email') }}" {% endif %}>
          <label for="email">Email</label>
        </div>
      </div>


      <div class="row">
        <div class="input-field col s3">
          <input id="username" type="text" name="username" class="validate" {% if request.post('username') %} value="{{ request.post('username') }}" {% endif %}>
          <label for="username">Username</label>
        </div>
      </div>


      <div class="row">
        <div class="input-field col s3">
          <input id="password" type="password" name="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s3">
          <input id="password_confirm" type="password" name="password_confirm" class="validate">
          <label for="password_confirm">Confirm Password</label>
        </div>
      </div>

      <div class="row">
          <div class="col s3">
        <button class="btn waves-effect waves-light" type="submit" name="action">Register</button>
          </div>
        </div>
        <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">

    </form>
    </div>















<!--
      <pre>
{% for key, item in errors.all() %}
  {{ item }}
{% endfor %}
</pre>
    
  
  <form action="{{ urlFor('register.post') }}" method="post" autocomplete="off">
  
  <div>
    <label for="email">Email</label>
     <input type="email" name="email" id="email" {% if request.post('email') %} value="{{ request.post('email') }}" {% endif %}>

  </div>

   <div>
    <label for="username">Username</label>
    <input type="text" name="username" id="username" {% if request.post('username') %} value="{{ request.post('username') }}" {% endif %}>

  </div>

   <div>
    <label for="password">Password</label>
    <input type="password" name="password" id="password">

  </div>

   <div>
    <label for="password_confirm">Confirm password</label>
    <input type="password" name="password_confirm" id="password_confirm">

  </div>
  <div>
  <input type="submit" value="Register">
  </div>
  <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
  </form>
  -->
{% endblock %}