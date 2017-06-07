<?php
/**
 * Style guide panel to demonstrate typography.
 *
 * @package strikebase
 */
?>

<h2 class="panel-title">Typography</h2>

<p>Because Strikebase is primarily an app, we&rsquo;re using system fonts for all of the UI text. By a happy coincidence, system fonts are looking pretty good these days, although I&rsquo;m probably biased by spending the majority of my days working on a Mac.</p>

<h3>Line height</h3>

<p>Line-height is universally set at 1.4, which is a nice comfortable height for body copy. For headings, the line height is a bit tighter.</p>

<p>Keeping the line height of text consistent helps maintain a balanced baseline. As a general rule, only change the line height if you have a specific reason for doing so.</p>

<h3>Headings</h3>

<div class="typography-headings">
	<span class="label">Heading one</span>
	<h1>The quick brown fox jumps over the lazy dog</h1>

	<span class="label">Heading two</span>
	<h2>Jinxed wizards pluck ivy from the big quilt</h2>

	<span class="label">Heading three</span>
	<h3>The five boxing wizards jump quickly</h3>

	<span class="label">Heading four</span>
	<h4>Sphinx of black quartz, judge my vow</h4>

	<span class="label">Heading five</span>
	<h5>Pack my box with five dozen liquor jugs</h5>

	<span class="label">Heading six</span>
	<h6>Five quacking zephyrs jolt my wax bed</h6>
</div>


<p><strong>These are basic markup and typographic styles for your site and how to use them.</strong> Most of these options are available through the TinyMCE editor window in the CMS admin, but some will require knowledge of coding HTML.</p>
<p>We use <code>background-image: url(http://basehold.it/i/31/FF69B4)</code> to debug the vertical rhythm of the site. Add it to the container for main text blocks, and use <code>background-position: 0px 22px</code> to adjust it so that it hits just on the baseline of the first paragraph line.</p>
<ul>
	<li><a href="#headings">Headings</a></li>
	<li><a href="#groupings">Groupings</a></li>
	<li><a href="#text">Text Elements</a></li>
	<li><a href="#tables">Tables</a></li>
</ul>
<h1 id="headings" class="group-heading">Headings</h1>
<hr>
<h1>Heading 1 <a href="#">with a Link</a></h1>
<p>Some filler paragraph text for better spacing and vertical rhythm of elements. I always thought that MadMax was a great movie, but I have not yet seen the newest one and I really wish that I saw it in the theater.</p>
<h2>Heading 2 <a href="#">with a Link</a></h2>
<p>Some filler paragraph text for better spacing and vertical rhythm of elements. I always thought that MadMax was a great movie, but I have not yet seen the newest one and I really wish that I saw it in the theater.</p>
<h3>Heading 3 <a href="#">with a Link</a></h3>
<p>Some filler paragraph text for better spacing and vertical rhythm of elements. I always thought that MadMax was a great movie, but I have not yet seen the newest one and I really wish that I saw it in the theater.</p>
<h4>Heading 4 <a href="#">with a Link</a></h4>
<p>Some filler paragraph text for better spacing and vertical rhythm of elements. I always thought that MadMax was a great movie, but I have not yet seen the newest one and I really wish that I saw it in the theater.</p>
<h5>Heading 5 <a href="#">with a Link</a></h5>
<p>Some filler paragraph text for better spacing and vertical rhythm of elements. I always thought that MadMax was a great movie, but I have not yet seen the newest one and I really wish that I saw it in the theater.</p>
<h6>Heading 6 <a href="#">with a Link</a></h6>
<p>Some filler paragraph text for better spacing and vertical rhythm of elements. I always thought that MadMax was a great movie, but I have not yet seen the newest one and I really wish that I saw it in the theater.</p>
<h1 id="groupings" class="group-heading">Groupings</h1>
<hr>
<h2>Paragraphs</h2>
<p>All paragraphs are wrapped in <code>&lt;p&gt;</code> tags. Additionally, <code>&lt;p&gt;</code> elements can be wrapped with a <code>&lt;blockquote&gt;</code> element <em>if the <code>p</code> element is indeed a quote</em>. Historically, <code>blockquote</code> has been used purely to force indents, but this is now achieved using CSS. Reserve <code>blockquote</code> for quotes.</p>
<pre class="examplecode"><code>&lt;p&gt;This is a paragraph&lt;/p&gt;</code></pre>
<h2>Blockquotes</h2>
<p>The <code>blockquote</code> element represents a section that is being quoted from another source. In this example, we also follow the blockquote with a <code>cite</code> element containing a link to the quoted source.</p>
<div class="example">
	<blockquote cite="http://hansard.millbanksystems.com/commons/1947/nov/11/parliament-bill#column_206">
		<p>Many forms of Government have been tried, and will be tried in this world of sin and woe. No one pretends that democracy is perfect or all-wise. Indeed, it has been said that democracy is the worst form of government except all those other forms that have been tried from time to time.</p>
	</blockquote>
	<p>
		<cite><a href="http://hansard.millbanksystems.com/commons/1947/nov/11/parliament-bill#column_206" target="_blank">- Parliament Bill 1947, Column 206</a>
		</cite>
	</p>
</div>
<pre class="examplecode"><code>&lt;blockquote cite="optional link to source material"&gt;&lt;p&gt;Quoted text&lt;/p&gt;&lt;/blockquote"&gt;&lt;p&gt;— &lt;cite&gt;&lt;a href="optional link to source material"&gt;Source of the Quote&lt;/a&gt;&lt;/cite&gt;&lt;/p&gt;</code></pre>
<h2>Horizontal rule</h2>
<p>The <code>hr</code> element (seen above and below) represents a paragraph-level thematic break, e.g. a scene change in a story, or a transition to another topic within a section of a reference book.</p>
<h2>Ordered list</h2>
<p>The <code>&lt;ol&gt;</code> element denotes an ordered list, and various numbering schemes are available through the CSS (including 1,2,3… a,b,c… i,ii,iii… and so on). Each item requires a surrounding <code>&lt;li&gt;</code> tag to denote individual items within the list (as you may have guessed, <code>li</code> stands for list item).</p>
<div class="example">
	<ol>
		<li>This is an ordered list.</li>
		<li>This is the second item, which contains a sub list
			<ol>
				<li>This is the sub list, which is also ordered.</li>
				<li>It has two items.</li>
			</ol>
		</li>
		<li>This is the final item on this list.</li>
	</ol>
</div>
<pre class="examplecode"><code>&lt;ol&gt;&lt;li&gt;List item one&lt;/li&gt;&lt;li&gt;List item two&lt;ol&gt;&lt;li&gt;Nested list item one&lt;/li&gt;&lt;li&gt;Nested list item two&lt;/li&gt;&lt;/ol&gt;&lt;/li&gt;&lt;/ol&gt;</code></pre>
<h2>Unordered list</h2>
<p>The <code>&lt;ul&gt;</code> element denotes an unordered list (ie. a list of loose items that don’t require numbering, as a bulleted list). Again, each item requires a surrounding <code>&lt;li&gt;</code> tag to denote individual items. Here is an example list showing the constituent parts of the British Isles:</p>
<div class="example">
	<ul>
		<li>United Kingdom of Great Britain and Northern Ireland:
			<ul>
				<li>England
					<ul>
						<li>Another nested list</li>
						<li>Yet another nested line item</li>
					</ul>
				</li>
				<li>Scotland</li>
				<li>Wales</li>
				<li>Northern Ireland</li>
			</ul>
		</li>
		<li>Republic of Ireland</li>
		<li>Isle of Man</li>
		<li>Channel Islands:
			<ul>
				<li>Bailiwick of Guernsey</li>
				<li>Bailiwick of Jersey</li>
			</ul>
		</li>
	</ul>
</div>
<pre class="examplecode"><code>&lt;ul&gt;
&lt;li&gt;List item one&lt;/li&gt;
&lt;li&gt;List item two
&lt;ul&gt;
&lt;li&gt;Nested list item one&lt;/li&gt;
&lt;li&gt;Nested list item two&lt;/li&gt;
&lt;/ul&gt;
&lt;/li&gt;
&lt;/ul&gt;</code></pre>
<h2>Definition list</h2>
<p>The <code>&lt;dl&gt;</code> element is for another type of list called a definition list. Instead of list items, the content of a <code>dl</code> consists of <code>&lt;dt&gt;</code> (Definition Term) and <code>&lt;dd&gt;</code> (definition description) pairs. Though it may be called a “definition list”, <code>dl</code> can apply to other scenarios where a parent/child relationship is applicable. For example, it may be used for marking up dialogues, with each <code>dt</code> naming a speaker, and each <code>dd</code> containing his or her words.</p>
<div class="example">
<dl>
<dt>This is a term.</dt>
<dd>This is the definition of that term, which both live in a <code>dl</code>.</dd>
<dt>Here is another term.</dt>
<dd>And it gets a definition too, which is this line.</dd>
<dt>Here is term that shares a definition with the term below.</dt>
<dt>Here is a defined term.</dt>
<dd><code>dt</code> terms may stand on their own without an accompanying <code>dd</code>, but in that case they <em>share</em> descriptions with the next available <code>dt</code>. You may not have a <code>dd</code> without a parent <code>dt</code>.</dd>
</dl>
</div>
<pre class="examplecode"><code>&lt;dl&gt;
&lt;dt&gt;Definition term&lt;/dt&gt;
&lt;dd&gt;Definition&lt;/dd&gt;
&lt;dt&gt;Definition term&lt;/dt&gt;
&lt;dt&gt;Another definition term&lt;/dt&gt;
&lt;dd&gt;Definition of both terms above&lt;/dd&gt;
&lt;/dl&gt;</code></pre>
<h2>Figures</h2>
<p>Figures are usually used to refer to images:</p>
<div class="example">
<figure><img src="http://lorempixum.com/720/300/abstract" alt="Example image"><br>
<figcaption> This is a placeholder image, with supporting caption.</figcaption>
</figure>
</div>
<p>Here, a part of a poem is marked up using figure. A <code>cite</code> element surrounds the name of the text being referred to:</p>
<div class="example">
<figure>‘Twas brillig, and the slithy toves<br>
Did gyre and gimble in the wabe;<br>
All mimsy were the borogoves,<br>
And the mome raths outgrabe.<p></p>
<figcaption> <cite>Jabberwocky</cite> (first verse). Lewis Carroll, 1832-98</figcaption>
</figure>
</div>
<pre class="examplecode"><code>&lt;figure&gt;
&lt;img src="link/to/image" alt="Alt text displayed when image does not load"&gt;
&lt;figcaption&gt;An optional caption for the content above with an optional &lt;cite&gt;citation&lt;/cite&gt;&lt;/figcaption&gt;
&lt;/figure&gt;</code></pre>
<p><a href="#menu">Back to Top ↑</a></p>
<h1 id="text" class="group-heading">Text Elements</h1>
<hr>
<p>There are a number of inline <abbr title="HyperText Markup Language">HTML</abbr> elements you may use anywhere within other elements. The semantics of the markup used is as important as how it looks, as web crawlers will not process CSS, but rather infer hierarchy and emphasis from the HTML elements being used.</p>
<h2>Links and anchors</h2>
<p>The <code>&lt;a&gt;</code> element is used to hyperlink text, be that to another page, a named fragment (also referred to as an “anchor”) on the current page, or any other location on the web. Example:</p>
<div class="example">
<p><a href=".">Go to the home page</a> or <a href="#menu">return to the menu at the top of this page</a>.</p>
</div>
<pre class="examplecode"><code>&lt;a href="link/to/page"&gt;link text&lt;/a&gt;</code></pre>
<h2>Stressed emphasis</h2>
<p>The <code>&lt;em&gt;</code> element is used to denote text with stressed emphasis, i.e., something you’d pronounce differently. Example:</p>
<div class="example">
<p>You simply <em>must</em> try the negitoro maki!</p>
</div>
<pre class="examplecode"><code>You simply &lt;em&gt;must&lt;/em&gt; try the negitoro maki!</code></pre>
<p>In HTML5, the older <code>&lt;i&gt;</code> element is still acceptable, and has taken on the form of styling something as an <code>em</code> would be styled, <em>without</em> adding the semantics of <code>em</code> for SEO.</p>
<h2>Strong importance</h2>
<p>The <code>&lt;strong&gt;</code> element is used to denote text with strong importance. Example:</p>
<div class="example">
<p><strong>Do not under any circumstances</strong> stick nails in the electrical outlet.</p>
</div>
<pre class="examplecode"><code>&lt;strong&gt;Do not under any circumstances&lt;/strong&gt; stick nails in the electrical outlet.</code></pre>
<p>In HTML5, the older <code>&lt;b&gt;</code> element is still acceptable, and has taken on the form of styling something as an <code>strong</code> would be styled <em>without</em> adding the semantics of <code>strong</code> for SEO.</p>
<h2>Small print</h2>
<p>The <code>&lt;small&gt;</code> element is used to represent disclaimers, caveats, legal restrictions, or copyrights (commonly referred to as “fine print”). It can also be used for attributions or satisfying licensing requirements. Example:</p>
<div class="example">
<p>Order now, only $5.99! <small>Some restrictions may apply if you live in the continental United States.</small></p>
</div>
<pre class="examplecode"><code>Order now, only $5.99! &lt;small&gt;Some restrictions may apply.&lt;/small&gt;</code></pre>
<h2>Strikethrough</h2>
<p>The <code>&lt;s&gt;</code> element is used to represent content that is no longer accurate or relevant. When indicating document edits — i.e., marking a span of text as having been removed from a document — use the <code>&lt;del&gt;</code> element instead (See <a href="#edits">Edits</a>). Example:</p>
<div class="example">
<p><s>Recommended retail price: $3.99 per bottle</s> Now selling for just $2.99 a bottle!</p>
</div>
<pre class="examplecode"><code>&lt;s&gt;Recommended retail price: $3.99 per bottle&lt;/s&gt; Now selling for just $2.99 a bottle!</code></pre>
<h2>Superscript and subscript text</h2>
<p>The <code>&lt;sup&gt;</code> element represents a superscript and the <code>&lt;sub&gt;</code> element represents a subscript. These elements must be used only to mark up typographical conventions with specific meanings, not for typographical presentation. As a guide, only use these elements if their absence would change the meaning of the content. Example:</p>
<div class="example">
<p>The coordinate of the <var>i</var>th point is (<var>x<sub><var>i</var></sub></var>, <var>y<sub><var>i</var></sub></var>). For example, the 10th point has coordinate (<var>x<sub>10</sub></var>, <var>y<sub>10</sub></var>).</p>
<p>If(<var>x</var>, <var>n</var>) = log<sub>4</sub><var>x</var><sup><var>n</var></sup></p>
</div>
<pre class="examplecode"><code>f(&lt;var&gt;x&lt;/var&gt;, &lt;var&gt;n&lt;/var&gt;) = log&lt;sub&gt;4&lt;/sub&gt;&lt;var&gt;x&lt;/var&gt;&lt;sup&gt;&lt;var&gt;n&lt;/var&gt;&lt;/sup&gt;</code></pre>
<h2>Citations</h2>
<p>The <code>&lt;cite&gt;</code> element is used to represent the title of a work (e.g. a book, essay, poem, song, film, TV show, sculpture, painting, musical, exhibition, etc). This can be a work that is being quoted or referenced in detail (i.e. a citation), or it can just be a work that is mentioned in passing. Stylistically, it may be italicized, but does not have to be. Example:</p>
<div class="example">
<p><cite>Universal Declaration of Human Rights</cite>, United Nations, December 1948. Adopted by General Assembly resolution 217 A (III).</p>
</div>
<pre class="examplecode"><code>&lt;cite&gt;Universal Declaration of Human Rights&lt;/cite&gt;, United Nations, December 1948. Adopted by General Assembly resolution 217 A (III).</code></pre>
<h2>Inline quotes</h2>
<p>The <code>&lt;q&gt;</code> element is used for quoting text inline. Example showing nested quotations:</p>
<div class="example">
<p>John said, <q>I saw Lucy at lunch, she told me <q>Mary wants you to get some ice cream on your way home</q>. I think I will get some at Ben and Jerry’s, on Gloucester Road.</q></p>
</div>
<pre class="examplecode"><code>John said, &lt;q&gt;I saw Lucy at lunch, she told me &lt;q&gt;Mary wants you to get some ice cream on your way home&lt;/q&gt;. I think I will get some at Ben and Jerry’s, on Gloucester Road.&lt;/q&gt;</code></pre>
<h2>Definition</h2>
<p>The <code>&lt;dfn&gt;</code> element is used to highlight the first use of a term. The <code>title</code> attribute can be used to describe the term, resulting in a browser “tooltip” when the mouse is hovered for more than a second. Example:</p>
<div class="example">
<p>Bob’s <dfn title="Dog">canine</dfn> mother and <dfn title="Horse">equine</dfn> father sat him down and carefully explained that he was an <dfn title="A mutation that combines two or more sets of chromosomes from different species">allopolyploid</dfn> organism.</p>
</div>
<pre class="examplecode"><code>Bob’s &lt;dfn title="Dog"&gt;canine&lt;/dfn&gt; mother and &lt;dfn title="Horse"&gt;equine&lt;/dfn&gt; father.</code></pre>
<h2>Abbreviation</h2>
<p>The <code>&lt;abbr&gt;</code> element is used for any abbreviated text, whether it be acronym, initialism, or otherwise. Generally, it’s less work and useful (enough) to mark up only the first occurrence of any particular abbreviation on a page, and ignore the rest. Any text in the <code>title</code> attribute will appear when the user’s mouse hovers the abbreviation (although notably, this does not work in Internet Explorer for Windows). Example abbreviations:</p>
<div class="example">
<p><abbr title="British Broadcasting Corportation">BBC</abbr>, <abbr title="HyperText Markup Language">HTML</abbr>, and <abbr title="Staffordshire">Staffs.</abbr> are common abbreviated terms.</p>
</div>
<pre class="examplecode"><code>&lt;abbr title="HyperText Markup Language"&gt;HTML&lt;/abbr&gt;is a common abbreviated term</code></pre>
<h2>Code</h2>
<p>The <code>&lt;code&gt;</code> element is used to represent fragments of computer code. Useful for technology-oriented sites, not so useful otherwise. Example:</p>
<div class="example">
<p>When you call the <code>activate()</code> method on the <code>robotSnowman</code> object, the eyes glow.</p>
</div>
<pre class="examplecode"><code>When you call the &lt;code&gt;activate()&lt;/code&gt; method</code></pre>
<h2>Variable</h2>
<p>The <code>&lt;var&gt;</code> element is used to denote a variable in a mathematical expression or programming context, but can also be used to indicate a placeholder where the contents should be replaced with your own value. Example:</p>
<div class="example">
<p>If there are <var>n</var> pipes leading to the ice cream factory then I expect at <em>least</em> <var>n</var> flavors of ice cream to be available for purchase!</p>
</div>
<pre class="examplecode"><code>If there are &lt;var&gt;n&lt;/var&gt; pipes…</code></pre>
<h2>Sample output</h2>
<p>The <code>samp</code> element is used to represent (sample) output from a program or computing system. Useful for technology-oriented sites, not so useful otherwise. Example:</p>
<div class="example">
<p>The computer said <samp>Too much cheese in tray two</samp> but I didn’t know what that meant.</p>
</div>
<pre class="examplecode"><code>The computer said &lt;samp&gt;Too much cheese&lt;/samp&gt;…</code></pre>
<h2>Keyboard entry</h2>
<p>The <code>&lt;kbd&gt;</code> element is used to denote user input (typically via a keyboard, although it may also be used to represent other input methods, such as voice commands). Example:</p>
<div class="example">
<p>To take a screenshot on your Mac, press <kbd>⌘ Cmd</kbd> + <kbd>⇧ Shift</kbd> + <kbd>3</kbd>.</p>
</div>
<pre class="examplecode"><code>Press the &lt;kbd&gt;⌘ Cmd&lt;/kbd&gt; key…</code></pre>
<h2>Marked or highlighted text</h2>
<p>The <code>&lt;mark&gt;</code> element is used to represent a run of text marked or highlighted for reference purposes. When used in a quotation it indicates a highlight not originally present but added to bring the reader’s attention to that part of the text. When used in the main prose of a document, it indicates a part of the document that has been highlighted due to its relevance to the user’s current activity. Example:</p>
<div class="example">
<p>I also have some <mark>kitten</mark>s who are visiting me these days. They’re really cute. I think they like my garden! Maybe I should adopt a <mark>kitten</mark>.</p>
</div>
<pre class="examplecode"><code>Maybe I should adopt a &lt;mark&gt;kitten&lt;/mark&gt;</code></pre>
<h3 id="edits">Edits</h3>
<p>The <code>&lt;del&gt;</code> element is used to represent deleted or retracted text which still must remain on the page for some reason. Meanwhile its counterpart, the <code>&lt;ins&gt;</code> element, is used to represent inserted text. Both <code>del</code> and <code>ins</code> have a <code>datetime</code> attribute which allows you to include a timestamp directly in the element. Example inserted text and usage:</p>
<div class="example">
<p>She bought <del datetime="2005-05-30T13:00:00">two</del> <ins datetime="2005-05-30T13:00:00">five</ins> pairs of shoes.</p>
</div>
<pre class="examplecode"><code>She bought &lt;del datetime="2005-05-30T13:00:00"&gt;two&lt;/del&gt; &lt;ins datetime="2005-05-30T13:00:00"&gt;five&lt;/ins&gt; pairs of shoes.</code></pre>
<p><a href="#menu">Back to Top ↑</a></p>
<h1 id="tables" class="group-heading">Tables</h1>
<hr>
<p>Tables should be used when displaying tabular data. The <code>&lt;caption&gt;</code> element gives the table a title, while the <code>&lt;colgroup&gt;</code> and <code>&lt;col&gt;</code> elements help align columns. The <code>&lt;thead&gt;</code> and <code>&lt;tbody&gt;</code> elements enable you to group sets of rows within each a table — the <code>thead</code> and <code>&lt;th&gt;</code> elements should be used to denote a row of table headings.</p>
<div class="example">
<table>
<caption>The Very Best Eggnog</caption>
<colgroup>
<col style="width: 50%;">
<col style="width: 25%;">
<col style="width: 25%;"> </colgroup>
<thead>
<tr>
<th scope="col">Ingredients</th>
<th scope="col">Serves 12</th>
<th scope="col">Serves 24</th>
</tr>
</thead>
<tbody>
<tr>
<td>Milk</td>
<td>1 quart</td>
<td>2 quart</td>
</tr>
<tr>
<td>Cinnamon Sticks</td>
<td>2</td>
<td>1</td>
</tr>
<tr>
<td>Vanilla Bean, Split</td>
<td>1</td>
<td>2</td>
</tr>
<tr>
<td>Cloves</td>
<td>5</td>
<td>10</td>
</tr>
<tr>
<td>Mace</td>
<td>10 blades</td>
<td>20 blades</td>
</tr>
<tr>
<td>Egg Yolks</td>
<td>12</td>
<td>24</td>
</tr>
<tr>
<td>Cups Sugar</td>
<td>1 ½ cups</td>
<td>3 cups</td>
</tr>
<tr>
<td>Dark Rum</td>
<td>1 ½ cups</td>
<td>3 cups</td>
</tr>
<tr>
<td>Brandy</td>
<td>1 ½ cups</td>
<td>3 cups</td>
</tr>
<tr>
<td>Vanilla</td>
<td>1 tbsp</td>
<td>2 tbsp</td>
</tr>
<tr>
<td>Half-and-half or Light Cream</td>
<td>1 quart</td>
<td>2 quart</td>
</tr>
<tr>
<td>Freshly grated nutmeg to taste</td>
<td></td>
<td></td>
</tr>
</tbody>
</table>
</div>
<pre class="examplecode"><code>&lt;table&gt;
&lt;caption&gt;The Very Best Eggnog&lt;/caption&gt;
&lt;colgroup&gt;
&lt;col style="width:50%"&gt;
&lt;col style="width:25%"&gt;
&lt;col style="width:25%"&gt;
&lt;/colgroup&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th scope="col"&gt;Ingredients&lt;/th&gt;
&lt;th scope="col"&gt;Serves 12&lt;/th&gt;
&lt;th scope="col"&gt;Serves 24&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;Milk&lt;/td&gt;
&lt;td&gt;1 quart&lt;/td&gt;
&lt;td&gt;2 quart&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;</code></pre>
