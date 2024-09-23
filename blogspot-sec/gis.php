<style>
  .video-container {
    margin: 10px 0px 0px 0px;
    display: flex;
    flex-direction: row-reverse;
    justify-content: flex-end;
    border-bottom: 1px solid black;
  }

  .video-container iframe 
    width: 250px;
    height: 150px;
  }
</style>



<div id="playlist-container"></div>

<script>
  // YouTube Playlist ID
  var playlistId = 'PLWZQyehT5gBjGGNTEP0O5D7Yy63Vser8s';
  // YouTube API Key
  var apiKey = 'AIzaSyAXx1Er68W9WTuZP9GRLxCXbii1lhY0imw';

  fetch('https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=4&playlistId=' + playlistId + '&key=' + apiKey)
    
    .then(response => response.json())
    .then(data => {
      // Iterate through first 4 playlist items
      for (var i = 0; i < data.items.length; i++) {
        var item = data.items[i];
        var videoId = item.snippet.resourceId.videoId;
        var videoTitle = item.snippet.title;
        // Create video container
        var videoContainer = document.createElement("div");
        videoContainer.classList.add('video-container');
        // Create iframe for video
        var iframe = document.createElement('iframe');
        iframe.src = 'https://www.youtube.com/embed/' + videoId;
        iframe.frameborder = '0';
        iframe.allowfullscreen = true;
        // Create title for video
        var title = document.createElement('h2');
        title.textContent = videoTitle;
        // Append iframe and title to video container
        videoContainer.appendChild(title);
        videoContainer.appendChild(iframe);
        // Append video container to playlist container
        document.getElementById('playlist-container').appendChild(videoContainer);
      }
    })

    .catch(error => console.error('Error fetching playlist:', error));
</script>







