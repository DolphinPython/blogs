<style>
  .video-container {
    margin: 10px 0px 0px 0px;
    display: flex;
    flex-direction: row-reverse;
    justify-content: flex-end;
    border-bottom: 1px solid black;
  }

  .video-container img {
    width: 250px;
    height: 150px;
    object-fit: cover;
    cursor: pointer;
  }

  .video-container h2 {
    margin: 0 10px;
    font-size: 16px;
    align-self: center;
  }
</style>

<div id="playlist-container"></div>

<script>
  // YouTube Playlist ID
  var playlistId = 'YHNVEj6qaBg';
  // YouTube API Key (replace with your actual key)
  var apiKey = 'IzaSyBJC8g5FJL1kfOyv856_LxNVRN_rGfM96c'; 
  // Remember to replace with your actual key

  function fetchPlaylistItems(pageToken = '') {
    fetch(`https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=50&playlistId=${playlistId}&key=${apiKey}&pageToken=${pageToken}`)
      .then(response => response.json())
      .then(data => {
        data.items.forEach(item => {
          const videoId = item.snippet.resourceId.videoId;
          const videoTitle = item.snippet.title;
          const thumbnailUrl = item.snippet.thumbnails.medium.url; // Get the medium-sized thumbnail

          // Create video container
          const videoContainer = document.createElement("div");
          videoContainer.classList.add('video-container');

          // Create img element for thumbnail
          const thumbnail = document.createElement('img');
          thumbnail.src = thumbnailUrl;
          thumbnail.alt = videoTitle;
          thumbnail.addEventListener('click', () => {
            window.open('https://www.youtube.com/watch?v=' + videoId, '_blank');
          });

          // Create title for video
          const title = document.createElement('h2');
          title.textContent = videoTitle;

          // Append thumbnail and title to video container
          videoContainer.appendChild(title);
          videoContainer.appendChild(thumbnail);

          // Append video container to playlist container
          document.getElementById('playlist-container').appendChild(videoContainer);
        });

        // If there's a next page, fetch it
        if (data.nextPageToken) {
          fetchPlaylistItems(data.nextPageToken);
        }
      })
      .catch(error => {
        if (error.response && error.response.status === 403) {
          console.error("Error: Invalid API key or quota exceeded");
        } else {
          console.error('Error fetching playlist:', error);
        }
      });
  }

  // Initial fetch call
  fetchPlaylistItems();
</script>
