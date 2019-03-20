{% extends 'templates/default.php' %}

{% block title %}Reset password{% endblock %}

{% block content %}
<pre>
{% for key, item in errors.all() %}
  {{ item }}
{% endfor %}
</pre>
    <form action="{{ urlFor('password.reset.post')}}?email={{ email }}&identifier={{ identifier|url_encode }}" method="post" autocomlplete="off">
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </div>

    <div>
        <label for="password_confirm">Confirm password</label>
        <input type="password" name="password_confirm" id="password_confirm">
    </div>

    <div>
        <input type="submit" value="Change password">
    </div>

    <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
    </form>
{% endblock %}

