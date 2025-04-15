<?php
$root = $_SERVER["DOCUMENT_ROOT"];
?>
<style>
body{
    padding: 100px;
    font-family: consolas;
}
.bash {
    background-color: #666;
    padding: 10px;
    border-radius: 10px;
    color: #FFF;
    width: auto;
}
</style>

<body>

<h1>Welcome to bottle-caps 👋</h1>
Easily track and manage your budget through an easy to understand interface. Create categories and budgeting periods to easily track and your expenses. View a category's details page to view your history of spending within that category. It's really that simple; it's budgeting made easy.

<div style="display: flex; gap: 20px; justify-content: center;">
   <img src="https://is1-ssl.mzstatic.com/image/thumb/PurpleSource221/v4/53/19/41/5319410d-3a34-bc96-f669-abff924a7c4a/home.png/400x800bb.png" width=200>
   <img src="https://is1-ssl.mzstatic.com/image/thumb/PurpleSource221/v4/d1/68/7e/d1687ebc-b420-0be0-6781-0e4ccab4a946/details.png/400x800bb.png" width=200>
   <img src="https://is1-ssl.mzstatic.com/image/thumb/PurpleSource211/v4/65/a7/00/65a700d8-a361-b9f4-2a68-2923e411bb39/expense.png/400x800bb.png" width=200>
</div>

<h3>Download Now!</h3>

<a href="https://apps.apple.com/us/app/bottle-caps/id6744372300">Bottle-caps</a> is available for download in the IOS app store now!

<h2>Framework and Dependencies</h2>

This is an <a href="https://expo.dev">Expo</a> project created with <a href="https://www.npmjs.com/package/create-expo-app">`create-expo-app`</a>.

- <strong>Package Manager</strong>: <a href="https://www.npmjs.com/">NPM</a>
- <strong>Framework</strong>: <a href="https://reactnative.dev/">React Native</a>
- <strong>Database</strong>: <a href="https://docs.expo.dev/versions/latest/sdk/sqlite/">Expo SQLite</a> <i>&</i> <a href="https://orm.drizzle.team/docs/overview">Drizzle ORM</a>
- <strong>Charts</strong>: <a href="https://gifted-charts.web.app/">Gifted Charts</a>

<h2>Get started</h2>

1. <strong>Clone Repository</strong>

   <p class="bash">
   git clone https://github.com/wcouture/bottle-caps.git
   </p>    

2. <strong>Install dependencies</strong>

   <p class="bash">
   npm install
   </p>

   <i>Execute the previous command within the root directory of the cloned repository.</i><br>

3. <strong>Start the app</strong>

   <p class="bash">
    npx expo start
   </p>

In the output, you'll find options to open the app in a

- <a href="https://docs.expo.dev/develop/development-builds/introduction/">development build</a>
- <a href="https://docs.expo.dev/workflow/android-studio-emulator/">Android emulator</a>
- <a href="https://docs.expo.dev/workflow/ios-simulator/">iOS simulator</a>
- <a href="https://expo.dev/go">Expo Go</a>, a limited sandbox for trying out app development with Expo

Source files are located within the <strong>app</strong> directory. This project uses [file-based routing](https://docs.expo.dev/router/introduction).

EULA:
<iframe src="/includes/bottlecaps-eula.php" ></iframe>
</body>