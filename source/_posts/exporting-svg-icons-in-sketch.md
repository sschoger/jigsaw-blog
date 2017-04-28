---
extends: _layouts.post
section: post
title: "My workflow for exporting cleaner SVG icons in Sketch"
author: Steve Schoger
date: 2017-03-20
twitter_image: "https://steveschoger.com/img/twitter-card.png"
twitter_title: "My workflow for exporting cleaner SVG icons in Sketch"
twitter_description: "Exporting clean SVG can be hard. Most graphical editing tools are capable of exporting SVG but none of them produce clean, optimized code. I’ve spent a lot of time trying to get the cleanest result, and I think I finally have a decent workflow."
---


Exporting clean SVG can be hard. Most graphical editing tools are capable of exporting SVG but none of them produce clean, optimized code. I’ve spent a lot of time trying to get the cleanest result, and I think I finally have a decent workflow.  Unfortunately, it involves more than one tool.

If you’re like me, you like to design everything in Sketch. Ultimately, for me, it just come down to preference. I have developed a good workflow in Sketch, I know all the keyboard shortcuts, and it’s just the tool that I am most comfortable with. 

Unfortunately, like many graphical editing tools, Sketch has it’s fair share of bugs. As a result, you need to jump out of Sketch to get certain tasks done. For example, I like to outline all of my paths in to shapes and even though I have seen much improvement with the pathfinder tools in Sketch, they still have a long way to go. If you often work with complex shapes, you may get unexpected results like this:

![Icon outline results in Sketch](/img/exporting-svg-icons-in-sketch/01-outline-results.png)

For this reason you’ll need to get out of Sketch to get the expected results. My go to tool for this has been [Figma](https://www.figma.com). Figma makes it super easy to import Sketch files and their boolean operations are nearly flawless. 

Once all of the shapes are merged, you’ll want to bring them back into Sketch because exporting SVG from Figma doesn’t give you the cleanest results. 

If you’re using the latest version of Sketch (42) and depending on the shape and how your drew it, you may notice when you import your icon, some areas maybe filled in like this:

![Sketch import results](/img/exporting-svg-icons-in-sketch/02-sketch-import-results.png)

This is happening because of the fill-rule used on the icon. The fill-rule is an attribute used in SVG that decides what paths are inside the shape and evaluates how the shape is filled. There are 2 types of fill-rules that you will need to know about: even-odd and non-zero.

Even-odd counts the amount of paths from the outside to the centre of the shape. Starting from zero, if the path is an even number, it gets filled. If the path is an odd number, it gets subtracted. 

Non-zero fills any path that is drawn left to right (clockwise) and subtracts any path that is drawn from right to left (counter clockwise). 

Since the release of Sketch 42, it now uses the non-zero rule by default (I thought it was a bug at first until I was forced to investigate it and learn more about the fill-rule). In Sketch, you can easily switch to use the even-odd rule by clicking the cog icon that you can find on the 'fills' bar in the Inspector. 

![Toggling Non-Zero and Even-Odd](/img/exporting-svg-icons-in-sketch/04-nonzero.gif) 

However, if you want your icons to work on all Android devices, you’ll want your icons to use the non-zero rule. Fortunately, Sketch makes this easy.

To fix this issue, you’ll need to expand the shapes in your layer list and reorder your paths (you may first need to ungroup the folders a few times by pressing shift + cmd + g). You’ll also want to change the boolean operations so the empty paths are being subtracted and the fill paths are set to union. 

![Reorder layers](/img/exporting-svg-icons-in-sketch/03-rearrange-layers.gif)

Now you’re ready to export. If you don’t already use the [SVGO plugin](https://www.sketchapp.com/extensions/plugins/svgo-compressor/), head over to the [Sketch extensions](https://www.sketchapp.com/extensions/) page and get it. This will clean up your SVG substantially. 

Open the SVG file in your editor to make sure your have the expected results. The default settings for the SVGO plugin removes the width and height which I like to keep.  I also like to include the full close tags on the paths so it doesn’t interfere with the auto-close tags later on in my code. Here is what the results look like using the example icon above: 

```xml
<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
    <path fill="#000" fill-rule="nonzero" d="M88 0h4a4 4 0 0 1 4 4v30a4 4 0 0 1 4 4v6a4 4 0 0 1-4 4v30a4 4 0 0 1-4 4h-4v-7.45A79.62 79.62 0 0 0 46 57.4V59h-4v4l1.8 4.51A4 4 0 0 1 40.1 73h-.48l2.88 23.04A3.44 3.44 0 0 1 39 100h-5a5.09 5.09 0 0 1-4.79-3.93l-5.14-25.73c-2.58-.16-4.55-2.13-4.87-5.3L18.6 59H10v-2H6a4 4 0 0 1-4-4H0V29h2a4 4 0 0 1 4-4h4v-2h36v1.6A79.62 79.62 0 0 0 88 7.46V0zm2 2v78h2a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-2zm6 44a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2v10zM10 27H6a2 2 0 0 0-2 2v24c0 1.1.9 2 2 2h4v-3H8a2 2 0 1 1 0-4h2v-2H8a2 2 0 1 1 0-4h2v-2H8a2 2 0 1 1 0-4h2v-2H8a2 2 0 1 1 0-4h2v-3zm0 4H8a1 1 0 1 0 0 2h2v-2zM88 9.98A82.6 82.6 0 0 1 46 26.6v28.78a82.6 82.6 0 0 1 42 16.63V9.98zm-38 20.7v-1.02a84.98 84.98 0 0 0 34-12.58v1.19a85.96 85.96 0 0 1-34 12.4zM10 37H8a1 1 0 1 0 0 2h2v-2zm0 6H8a1 1 0 1 0 0 2h2v-2zm0 6H8a1 1 0 1 0 0 2h2v-2zm-8 2h1V31H2v20zm10-26v32h2V25h-2zm3 32h3.4l-.4-4h24v4h2V25H15v32zm24.38 14h.71a2 2 0 0 0 1.86-2.74l-1.77-4.43-1.61.73.8 6.44zM24.2 68.35h.13c.64.02 1.36-.13 2.12-.48l9.95-4.52L40 61.7V55H20.21l.98 9.84c.14 1.33.63 2.31 1.37 2.9a2.9 2.9 0 0 0 1.64.6zm6.98 27.33A3.1 3.1 0 0 0 34 98h4.98c1.01 0 1.65-.72 1.53-1.72l-3.99-31.9-9.66 4.4c-.34.15-.67.28-1 .37l5.3 26.53zM23 59a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm15-1a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
</svg>
```

---

If you like the icon used in the article, you can get it, along with many others, [here](http://www.heroicons.com). 