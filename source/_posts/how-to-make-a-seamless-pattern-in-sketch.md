---
extends: _layouts.post
section: post
title: "How to make a seamless pattern in Sketch"
author: Steve Schoger
date: 2017-04-19
twitter_image: "https://www.steveschoger.com/img/twitter-card.png"
twitter_title: "How to make a seamless pattern in Sketch"
twitter_description: "Ever since I started making Hero Patterns, the question I get asked to most is how to make a pattern appear seamless. Because its a visual tutorial, I decided to make a video explaining my process."
---


Ever since I started making [Hero Patterns](http://www.heropatterns.com), the question I get asked to most is how to make a pattern appear seamless. Because its a visual tutorial, I decided to make a video explaining my process. Have a look:

<div class="video-embed">
	<iframe src="https://player.vimeo.com/video/213873355" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
</div>

##Making your SVG pattern repeat with CSS

Once your pattern is [properly exported](/2017/03/20/my-workflow-for-exporting-cleaner-svg-icons-in-sketch), you’ll need to take a few additional steps to optimize it. 

Open your SVG in your favourite code editor. The first thing you’ll want to do is encode all of the angle brackets ( `< >` )  and the number sign ( `#` ) used for the hex code. You’ll also want to replace all of the double quotes to single quotes. For efficiency, I usually do a good ol’ find and replace with my code editor. Simply replace the `<` with `%3C`, `>` with `%3E` and `#` with `%23`.  

Now you’ll need to encode the SVG in the data URI that looks like this: 

```css
data:image/svg+xml,
```

Finally, wrap the URI in double quotes and use the url () value like you would for any repeatable background image. Have a look at the results: 

```css
background-color: #000000;
background-image: url("data:image/svg+xml,%3Csvg width='44' height='12' viewBox='0 0 44 12' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M20 12v-2L0 0v10l4 2h16zm18 0l4-2V0L22 10v2h16zM20 0v8L4 0h16zm18 0L22 8V0h16z' fill='%23FFFFFF' fill-rule='evenodd'/%3E%3C/svg%3E");
```

---

If you like the icons used in the video, you can get them, along with many others, [here](http://www.heroicons.com).

Check out [Hero Patterns](http://www.heropatterns.com) for loads of free patterns updated regularly. 