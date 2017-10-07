---
extends: _layouts.post
section: post
title: "6 Tips that Will Improve Your UI Typography"
author: Steve Schoger
date: 2017-07-19
twitter_image: "https://www.steveschoger.com/img/twitter-card.png"
twitter_title: "6 Tips that Will Improve Your UI Typography"
twitter_description: "Typography is probaby one of the most important elements of design on the web."
---

Typography is one of (if not) the most important elements of design on the web. In 2006, Oliver Reichenstein wrote a [compelling article](https://ia.net/topics/the-web-is-all-about-typography-period/) that argued 95% of design on the web is typography. So if typography is that important, there is no wonder why users can’t be kept engaged if it is done poorly. 

When I say typography, I’m not just referring to the font selection (although that is one important factor), I am referring to the entire composition of it. In this post, I’ve compiled a list of some important elements you can consider to create beautiful typography. 

Let's get started!

##Use liberal spacing

If there is one piece of design advice I could give to non-designers, it would be to use space liberally. By adding generous spacing to your composition, you can take your design from looking like a dull, uninviting interface to a beautiful, highly polished experience. Spacing can enhance almost everything on your design from typography to layout, but its also important to approach it with a great deal of care.

![Example of good spacing and bad spacing](/img/170719-improving-typography/01-spacing.png) 

Space can be introduced to typography by using the line height property. There are many things to consider when defining the line height, including font selection and size, but generally a good line height for paragraph text to be somewhere between 1.4 and 1.6 relative to the font size. Headlines should be a bit more compact depending on the size. The main goal is to make it so you can comfortably jump from one line to the next without getting disoriented. 

When it comes to defining margins and padding in a UI, avoid using a variety of different sizes and try to create visual harmony by using proportionate values. The simplest way to do this is by using a set of REM units, so they are all a multiple of the same value. Not only does this help to achieve vertical rhythm, but it also provides a formula to justify your choices.

In the image below, I've used multiples of 6 to define both the line height and the margins. 

![6 pixel baseline grid](/img/170719-improving-typography/02-baseline-example.png)

##Use color and contrast 

Sometimes, in order to make something stand out, you need to make other elements of the design stand back. By doing this with text, you can create contrast to establish a typographic hierarchy. 

Making important information like headlines ‘pop’ is a great way to keep your site easily scannable. Usually, if I am working with a block of text that includes a headline, I'll reduce the contrast of the paragraph text by 20 - 30% depending on the contrast of the header and the background color. 

![Example of good contrast and bad contrast](/img/170719-improving-typography/03-contrast.png) 

Try to aim for 3 shade variations for text colors in the UI: a dark one for text you want to emphasis like headlines, a medium one for normal UI text and a lighter one for less important information. Have a look at the example below that illustrates how 3 shade variations can be used to create hierarchy: 

![Using 3 shade variants for text](/img/170719-improving-typography/04-shade-varients.png)

It’s always a good idea to put your color choices through a [color contrast checker](http://webaim.org/resources/contrastchecker/) to ensure they have a contrast ratio of 4.5:1 or higher. 

##Never go full black

As mentioned above, using plenty of contrast is always an important consideration for your design. But, did you know its actually easier to read dark grey text than black text when on a white background? Full black text on white can sometimes make it hard to focus on what you’re reading but by reducing the darkness of the text by just a few percentage points, you’ll save your readers eyes from getting strained. 

![Example of full black text and dark grey text](/img/170719-improving-typography/05-black-text.png) 

On occasion, one trick I like to do instead of using dark grey text is to use a dark and saturated variant of my applications brand or primary color. A great example of this is Facebook. At first glance, Facebook's body text appears to be almost black. But if you look closely you’ll see that the text is just a variant of Facebook’s brand color. You can see this throughout the entire site from the links to the placeholder text; each color has the same hue (or close to it) with different saturation and darkness values. 

![Facebook using a hue for their typography](/img/170719-improving-typography/06-facebook-hue.png)

This isn't guaranteed to work out with every color, but give it a shot and see how it looks. If in doubt, stick to shades of grey; it'll never look bad. With that said...

##Don't use grey text on a colored background

When working with text on a colored background, avoid using pure grey text as it always looks a bit "off" and can even appear muddy looking in some cases. Instead, consider saturating your text with a bit of the background hue. Not only does this make the text appear more vibrant, it also makes it feel more 'glued' to the background. 

![Pure grey text on a colored background](/img/170719-improving-typography/07-pure-grey-on-color.png)

Alternatively, a simpler approach would be to lower the opacity of the text for a similar effect. However, be careful when doing this on a complex background as you don't want the background details to show through making the text illegible.    

##Use a comfortable line length

A common mistake I see is paragraphs that are fit to the entire width of the page container. For some reason, there is a desire to fill the page so there is no awkward white space.  This can be problematic because in most cases a page width is far too wide making if difficult to track your progress while reading. 

Another mistake I see is paragraphs being too narrow. This not only makes your text hard to read but also your layout looking unprofessional. This may be acceptable for small blocks of text that are no more than 3 or 4 lines. But, for large blocks of text, this can cause excessive wrapping which may cause the reader to skips lines.

![Example of good and bad line lengths](/img/170719-improving-typography/08-line-length.png) 

There are a few common rules used to measure line length. If you’re working with a large block of left aligned text, the general rule of thumb is between 45 and 90 characters per line. Keeping your line length more narrow than wide is ideal, but the point size of the font plays an important role in determining the optimal length. 

Unfortunately, whatever variables you use to make your text fit are not transferable from font to font. If you plan to change your font family, you may also need to adjust your font size, letter-spacing, and word spacing to get the desired results.  

##Left align large blocks of text

This is something I see far too often: a large block of text that’s centre aligned. For some reason, there is a common desire to centre align text so it’s perfectly balanced. Centre alignment can work nicely if it’s a small, narrow block of text that’s no more than 3 or 4 lines but like line length, this can make it difficult to track your progress while reading _large_ blocks of text. 

![Example of center alignment and left alignment](/img/170719-improving-typography/09-alignment.png)

Aligning your text to the left makes if much more comfortable to scan and much more desirable when you introduce lists and other UI components that are attached to the context of the text. 

## Conclusion

Good typography takes a great deal of patience and attention to detail but when done thoughtfully, it can really elevate your design. I hope these tips help you with your design and make you more aware of some of the details that are considered when creating a typographic composition.  