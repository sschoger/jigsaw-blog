---
extends: _layouts.post
section: post
title: "Using SVG icons with external stylesheets"
author: Steve Schoger
date: 2017-03-14
---


The more I work with SVG icons the stronger I believe that inline SVG is the best approach for implementing them. The primary reason for this is that inline SVG is currently the best option if you want to style your icons using an external stylesheet. There are 2 major advantages to this:


1. You get far more control over the style of the icons, opening the door to much more creative possibilities
2. It keeps the style of your icons together with the style of the rest of your site allowing you to reuse code, especially if you’re using a CSS compiler. 

Let’s put this into practice: 


Say you have a set of SVG icons, each with multiple paths and you want match the color palette to the rest of the site that you are working on. Including them I’m the same CSS would be far more efficient, especially if you’re designing in code and making frequent changes to find just the right color palette. Fortunately, achieving this can be quite simple. 

Have a look at the example icon below from my [Heroicons](http://www.heroicons.com) set. As you can see, the icon has multiple paths for different components of the icon. When you export this icon to a SVG, each path is preserved in the code so you can style them individually. Layers are ordered in the code as they are in your graphical editing tool; the top layer should be the last path in the SVG code. In this example, the last path would be the dark outline of the house.

![Icon with multiple paths](/img/using-svg-icons-with-external-stylesheets/01-multiple-paths.png) 

Depending on how you created the icons your SVG code may contain a few different properties: fill, fill-opacity, stroke, stroke-width, etc. If your using Sketch (like me) and have installed the [SVGO plugin](https://www.sketchapp.com/extensions/plugins/svgo-compressor/) (you should) your code for each path might look something like this:

```xml
<svg xmlns="http://www.w3.org/2000/svg" width="100px" height="100px" viewBox="0 0 100 100" class="heroicon-home heroicon heroicon-lg">
    <g fill-rule="evenodd">
        <polygon fill="#F2F3D8" points="7 7 44.5 7 50 1.5 55 7 93 7 93 44 99 50 96 53 50 7 4 53 1 50 7 44" />
        <path fill="#7ACFC0" d="M8 50L50 8l42 42v48H8V50zm10 7h12v22H18V57zm52 0h12v22H70V57zM50 38a8 8 0 1 0 0-16 8 8 0 0 0 0 16z" />
        <path fill="#A8C0BC" d="M84 79V55H68v24h-2v4h20v-4h-2zm-52 0V55H16v24h-2v4h20v-4h-2zm8-24h20v36H40V55zm10-16a9 9 0 1 0 0-18 9 9 0 0 0 0 18zm2-12v-3.71A7.01 7.01 0 0 1 56.71 28H52v-1zm-8.71 1A7.01 7.01 0 0 1 48 23.29V28h-4.71zM48 36.71A7.01 7.01 0 0 1 43.29 32H48v4.71zM56.71 32A7.01 7.01 0 0 1 52 36.71V32h4.71zM18 57h12v22H18V57zm52 0h12v22H70V57z" />
        <rect fill="#DB6566" width="16" height="34" x="42" y="57" />
        <path fill="#DFF6F9" d="M52 27v-3.71A7.01 7.01 0 0 1 56.71 28H52v-1zm-8.71 1A7.01 7.01 0 0 1 48 23.29V28h-4.71zM48 36.71A7.01 7.01 0 0 1 43.29 32H48v4.71zM56.71 32A7.01 7.01 0 0 1 52 36.71V32h4.71zM18 57h12v22H18V57zm52 0h12v22H70V57z" />
        <polygon fill="#EFF3F2" points="93 90 7 90 7 99 93 99" />
        <path fill="#000000" opacity=".2" d="M7 50L50 7l43 43v6L50 13 7 56v-6zm7 33h20v2H14v-2zm52 0h20v2H66v-2z" />
        <path fill="#434747" d="M94 98V52l.59.59L96 54l1.41-1.41 1.18-1.18L100 50l-1.41-1.41L94 44V6H56l-4.59-4.59L50 0l-1.41 1.41L44 6H6v38l-4.59 4.59L0 50l1.41 1.41L2.6 52.6 4 54l1.41-1.41L6 52v46H0v2h100v-2h-6zM58 30a8.02 8.02 0 0 0-10-7.75 8.01 8.01 0 0 0 4 15.5A8.01 8.01 0 0 0 58 30zm-10-1h1v-5.93a7.06 7.06 0 0 1 2 0V29h5.93a7.06 7.06 0 0 1 0 2H51v5.93a7.06 7.06 0 0 1-2 0V31h-5.93a7.06 7.06 0 0 1 0-2H48zm4-2v-3.71A7.01 7.01 0 0 1 56.71 28H52v-1zm-8.71 1A7.01 7.01 0 0 1 48 23.29V28h-4.71zM48 36.71A7.01 7.01 0 0 1 43.29 32H48v4.71zM56.71 32A7.01 7.01 0 0 1 52 36.71V32h4.71zM50 40a10 10 0 1 0 0-20 10 10 0 0 0 0 20zm9-10a9 9 0 1 1-18 0 9 9 0 0 1 18 0zM16 56v23h-2v4h20v-4h-2V55H16v1zm15 0H17v23h1V57h12v22h1V56zm-2 23H19V69h10v10zM19 68h10V58H19v10zm14 12H15v2h18v-2zm35-24v23h-2v4h20v-4h-2V55H68v1zm1 0v23h1V57h12v22h1V56H69zm2 23V69h10v10H71zm10-11V58H71v10h10zM67 80v2h18v-2H67zm-21.5-4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM49 60v1h-3v10h-1V60h4zm6 0v1h-3v10h-1V60h4zm0 18v1h-9v8h-1v-9h10zm30-35L51.41 9.41 50 8l-1.41 1.41L15 43h70zm-71 1l-1 1h74l-1-1H14zM8 90V50l4-4h76l4 4v40H60V55H40v35H8zm55 1v3h3v4h26v-7H63zM8 98v-7h29v3h-3v4H8zm28 0h28v-2H36v2zm23-8h-1V57H42v33h-1V56h18v34zm-16 0V58h14v32H43zm18 4v-2H39v2h22zM58 8l3 3h7V9h1v2h4v1H62l7 7h7v-2h1v2h7v1H70l7 7h7v-2h1v2h2v1h-9l14 14V32h-8v-1h4v-2h1v2h3v-7h-7v-1h3v-2h1v2h3v-7H77v-1h3v-2h1v2h11v-3h-9v-1h1V9h1v2h7V8H58zM8 8h34l-3 3h-3V9h-1v2h-3v1h6L23 27h-3v-2h-1v2h-9v1h12L8 42V32h8v-3h-1v2H8v-7h8v-3h-1v2H8v-3h16v-1h-4v-2h-1v2H8v-3h22v-1H16v-2h-1v2H8v-3h12v-1h-8V9h-1v2H8V8zM4 51.17L48.59 6.6 50 5.17l1.41 1.42L96 51.17 97.17 50 50 2.83 2.83 50 4 51.17z" />
    </g>
</svg>
```

To make this work with an external stylesheet you’ll need to give each path a class name. Now add all of the properties to your CSS file and remove them from the SVG code. It's important that you remove the colors in the SVG code or else you will not be able to overide them in CSS. 

###SVG

```xml
<polygon class="heroicon-component-accent" ... /> <!-- Roof  -->
<path class="heroicon-component-fill" ... /> <!-- Wall -->
<path class="heroicon-component-accent" ... /> <!-- Frames -->
<rect class="heroicon-component-accent" ... /> <!-- Door -->
<path class="heroicon-component-fill" ... /> <!-- Windows -->
<polygon class="heroicon-component-fill" ... /> <!-- Parging -->
<path class="heroicon-shadows" ... /> <!-- Shadows -->
<path class="heroicon-outline" ... /> <!-- Outline -->
```

###CSS

```css
.heroicon-outline {fill:#626262;}
.heroicon-component-fill {fill:white;}
.heroicon-component-accent {fill:#7ACFC0;}
.heroicon-shadows {fill:#626262; opacity:0.4; }
```

Have a look at the results:

![Icon with accent colors](/img/using-svg-icons-with-external-stylesheets/02-color-results.png)

This approach gives you much more creative freedom and enables you with easily align your icons to your visual identity as it evolves. Take this concept even further by adding hover states, animations and gradients to create a better emotional experience for your users.  

---

If you like the icon used in the article, you can it, along with many others, [here](http://www.heroicons.com). 