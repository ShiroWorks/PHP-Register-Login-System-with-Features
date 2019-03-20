{% if auth %}
    <p>Hello {{ auth.getFullNameOrUsername() }},</p>
    {% else %}
        <p>Hello there,</p>
        {% endif %}
        
