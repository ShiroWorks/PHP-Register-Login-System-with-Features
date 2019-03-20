{% extends 'templates/default.php' %}

{% block title %}Recover password{% endblock %}

{% block content %}
<pre>
{% for key, item in errors.all() %}
  {{ item }}
{% endfor %}
</pre>

<p>Enter your email address to start your password recovery.</p>
   <form action="{{ urlFor('password.recover.post') }}" method="post" autocomplete="off">
    <div>
   <label for="email">Email</label>
   <input type="email" name="email" id="email" {% if request.post('email') %} value="{{ request.post('email')}}" {% endif %}>
   </div>
   <div>
   <input type="submit" value="Request reset">
   </div>
   <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
   
   
   </form>
{% endblock %}