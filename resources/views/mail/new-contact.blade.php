<div>
    <h1>C'è una richiesta di contatto!</h1>
  <ul>
    <li>
        <strong>Nome:</strong>  {{ $lead->name }}
    </li>
    <li>
        <strong>Email:</strong>  {{ $lead->email }}
    </li>
    <li>
        Messaggio: <br>
        {{ $lead->message }}
    </li>
  </ul>
</div>