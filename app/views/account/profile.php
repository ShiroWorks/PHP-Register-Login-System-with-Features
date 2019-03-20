{% extends 'templates/default.php' %}

{% block title %}Update profile{% endblock %}

{% block content %}
<div class="container">
<pre>
{% for key, item in errors.all() %}
 <p class="red-text"> {{ item }}</p>
{% endfor %}
</pre>
</div>
<div class="row container">
    <form class="col s12" action="{{ urlFor('account.profile.post') }}" method="post" autocomplete="off">
    <div class="row">
        <div class="input-field col s3">
          <input id="email" type="email" name="email" class="validate" value ="{{ request.post('email') ? request.post('email') : auth.email  }}">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
      <div class="input-field col s3">
          <input id="first_name" type="text" name="first_name" class="validate" value ="{{ request.post('first_name') ? request.post('first_name') : auth.first_name  }}">
          <label for="email">First Name</label>
        </div>
      </div>
      <div class="row">
      <div class="input-field col s3">
          <input id="last_name" type="text" name="last_name" class="validate" value ="{{ request.post('last_name') ? request.post('last_name') : auth.last_name  }}"">
          <label for="email">Last Name</label>
        </div>
      </div>

      <div class="row">
          <div class="col s3">
        <button class="btn waves-effect waves-light" type="submit" name="action">Change</button>
          </div>
        </div>
        <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">


    </form>
</div>






<!--
   <form action="{{ urlFor('account.profile.post') }}" method="post" autocomplete="off">
   <div>
    <label for="email">Email</label>
    <input type="email" name="email" id="email" value ="{{ request.post('email') ? request.post('email') : auth.email  }}">
   </div>

   <div>
    <label for="first_name">First name</label>
    <input type="text" name="first_name" id="first_name" value ="{{ request.post('first_name') ? request.post('first_name') : auth.first_name  }}">
   </div>

   <div>
    <label for="last_name">Last name</label>
    <input type="text" name="last_name" id="last_name" value ="{{ request.post('last_name') ? request.post('last_name') : auth.last_name  }}"">
   </div>

   <div>
    <input type="submit" value="Update">
   </div>
    <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
   </form>
   -->
{% endblock %}