{% extends 'templates/default.php' %}

{% block title %}{{ user.getFullNameOrUsername() }}{% endblock %}

{% block content %}

<div class="container">
<img src="{{ user.getAvatarUrl(30) }}" alt="Profile picture for {{ user.getFullNameOrUsername() }}" >
    <h2>{{ user.username }}</h2>
   
    <dl>    
    {% if user.getFullName() %}

    <p> <strong>Full Name: </strong> {{ user.getFullName() }}</p>
      
        {% endif %}
    <p> <strong>Email Address:</strong>  {{ user.email }} </p>
    
    </div>
{% endblock %}