<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
<style>
    .container {
      max-width: 600px;
      margin: 0 auto;
    }
    
    .participants-heading {
      font-size: 32px;
      font-weight: bold;
      color: #7B3F00;
      margin-bottom: 20px;
    }
    
    .participants-list {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    
    .participant {
      display: flex;
      align-items: center;
      padding: 10px;
      margin-bottom: 10px;
      background-color: #f8f8f8;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    
    .participant-img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      object-fit: cover;
      margin-right: 10px;
    }
    
    .participant-name {
      font-size: 18px;
      color: #7B3F00;
    }
    .participant-icon {
  font-size: 24px;
  color: #7B3F00;
  margin-right: 10px;
}
        html, body {
            height: 100%;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
           
        }
    </style>
    
    <div class="container">
        <h3 class="participants-heading">Participants for {{ $offre->nom }}</h3>
        <ul class="participants-list">
            @foreach ($participants as $participant)
                <li class="participant">
                    {{-- <img class="participant-img" src="{{ $participant->profile_picture }}" alt="Profile Picture"> --}}
                    <i class="participant-icon fas fa-user"></i>
                    <span class="participant-name">{{ $participant->name }}</span>
                </li>
            @endforeach
        </ul>
    </div>
    