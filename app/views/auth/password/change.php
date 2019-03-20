{% extends 'templates/default.php' %}

{% block title %}Change password{% endblock %}

{% block content %}
<div class="container">
<pre>
{% for key, item in errors.all() %}
 <p class="red-text"> {{ item }}</p>
{% endfor %}
</pre>
</div>
<div class="row container">
    <form action="{{ urlFor('password.change.post') }}" method="post" autocomplete="off"  class="col s12">

    <div class="row">
        <div class="input-field col s3">
          <input id="password_old" name="password_old" type="password" class="validate">
          <label for="password_old">Old password</label>
        </div>
    </div>
        <div class="row">
          <div class="input-field col s3">
          <input id="password" name="password" type="password" class="validate">
          <label for="password">New password</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s3">
          <input id="password_confirm" name="password_confirm" type="password" class="validate">
          <label for="password_confirm">Confirm new password</label>
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

{% endblock %}

