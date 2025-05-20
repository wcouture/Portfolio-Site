<?php
$root = $_SERVER["DOCUMENT_ROOT"];
?>
<style>
body{
    padding: 100px;
    font-family: monospace;
    background: white;
}
.bash {
    background-color: #666;
    padding: 10px;
    border-radius: 10px;
    color: #FFF;
    width: auto;
}
img {
    margin: 15px;
    border: 2px solid #333;
    border-radius: 10px;
}
.iframe-container {
    width: 60%;
    height: 600px;
}
iframe{
    width: 100%;
    height: 100%;
}
</style>

<body>

<h1>Welcome to Noles FO 🥍</h1>
Follow along with the Florida State Men's club lacrosse face-off athletes and improve skills with the included training tools. View the individual game by game performances of each face-off athlete on the FSU lacrosse team throughout the season. Use the built in whistle and random cadence tool to improve your whistle discipline!

<div style="display: flex; gap: 20px; justify-content: center;">
   <img src="https://github.com/wcouture/NolesFOStats/raw/main/assets/promo-images/NolesFO-Home.png" width=200>
   <img src="https://github.com/wcouture/NolesFOStats/raw/main/assets/promo-images/NolesFO-Trainer.png" width=200>
   <img src="https://github.com/wcouture/NolesFOStats/raw/main/assets/promo-images/player-details.png" width=200>
   <img src="https://github.com/wcouture/NolesFOStats/raw/main/assets/promo-images/game-details.png" width=200>
</div>

<h3>Download Now!</h3>

<!-- <a href="https://apps.apple.com/us/app/bottle-caps/id6744372300">Noles FO</a> is available for download in the IOS app store now! -->

<h2>Framework and Dependencies</h2>

<ul>
    <li><strong>Package Manager</strong>: <a href="https://www.npmjs.com/">NPM</a></li>
    <li><strong>Build Platform</strong>: <a href="https://expo.dev">Expo</a></li>
    <li><strong>Framework</strong>: <a href="https://reactnative.dev/">React Native</a></li>
    <li><strong>Statistics API</strong>: <a href="https://fo-stats.willc-dev.net">FO Stats</a>
</ul>

<h2>Get started</h2>

1. <strong>Clone Repository</strong>

   <p class="bash">
   git clone https://github.com/wcouture/NolesFOStats.git
   </p>    

2. <strong>Install dependencies</strong>

   <p class="bash">
   npm install
   </p>

   <i>Execute the previous command within the root directory of the cloned repository.</i><br><br>

3. <strong>Start the app</strong>

   <p class="bash">
    npx expo start
   </p>

In the output, you'll find options to open the app in a
<ul>
    <li><a href="https://docs.expo.dev/develop/development-builds/introduction/">development build</a></li>
    <li><a href="https://docs.expo.dev/workflow/android-studio-emulator/">Android emulator</a></li>
    <li><a href="https://docs.expo.dev/workflow/ios-simulator/">iOS simulator</a></li>
    <li><a href="https://expo.dev/go">Expo Go</a>, a limited sandbox for trying out app development with Expo</li>
</ul>

Source files are located within the <strong>app</strong> directory. This project uses <a href="https://docs.expo.dev/router/introduction">file-based routing</a>.

<div class="iframe-container">
    <iframe src="/includes/fostats-pp.php" ></iframe>
</div>
</body>