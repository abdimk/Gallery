@props(['list'])

<!-- item -->
<div class = "design-item">
    <div class = "design-img">
      <img class="main-image" src = "images/art-design-1.jpg" alt = "">
      @php
          $fulldate = $list->created_at;
          $date = new DateTime($fulldate);
          $formattedDate = $date->format('F j');
      @endphp
      <span><i class = "far"></i>{{$formattedDate}}</span>
      <span>{{$list->location}}</span>
    </div>
    <div class = "design-title">
      <a href = "/gallery/{{$list->id}}">{{$list->name}}</a>
      <p class=".title">{{$list->description}}</p>
      <a class="btn" href = "#" >Read More</a>
    </div>
    
  </div>
  