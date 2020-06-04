<h2 class="code-line" data-line-start=0 data-line-end=1 ><a id="TEAM_STORM_0"></a>TEAM STORM</h2>
<p class="has-line-data" data-line-start="2" data-line-end="3">Welcome to development branch</p>
<p class="has-line-data" data-line-start="4" data-line-end="5"><strong>To get started:</strong></p>
<p class="has-line-data" data-line-start="6" data-line-end="7">Make sure you are on a desktop or laptop</p>
<p class="has-line-data" data-line-start="8" data-line-end="9"><strong>Step 1:</strong> Click on Fork at the top right corner</p>
<p class="has-line-data" data-line-start="10" data-line-end="11"><strong>Step 2:</strong> Click on clone or download, copy the url you see after clicking on it</p>
<p class="has-line-data" data-line-start="12" data-line-end="13"><strong>Step 3:</strong> Head to your local machine and create a folder, (this step is not necessary but to keep your work organized on your local machine, you can create folder called ‘github repo’ on your desktop).</p>
<p class="has-line-data" data-line-start="14" data-line-end="15"><strong>Step 4:</strong> Open your preferred terminal</p>
<p class="has-line-data" data-line-start="16" data-line-end="17">Here you have arrays of choice, you could use git bash (you have to download it to use it. Download it here -&gt; [GitHub]<a href="https://git-scm.com/downloads">https://git-scm.com/downloads</a>)), powershell or your default window terminal.</p>
<p class="has-line-data" data-line-start="18" data-line-end="21"><strong>If you want to use git bash:</strong><br>
<strong><em>4.1</em></strong> Open the ‘github repo’ folder, remember you saved it on your desktop.<br>
Right-click anywhere in the folder and choose ‘git bash here’, automatically git bash will open.</p>
<p class="has-line-data" data-line-start="22" data-line-end="24">*<strong>If you want to use the terminal</strong><br>
<strong><em>4.2</em></strong> press Window + R on your keyboard</p>
<p class="has-line-data" data-line-start="25" data-line-end="26"><strong>Step 5:</strong><code>git clone pasteTheUrlOfTheLinkYouCopiedInStep2</code></p>
<p class="has-line-data" data-line-start="27" data-line-end="29">It should look like this<br>
<code>git clone https://github.com/{yourGithubUsername}/HNG_storm-task.git</code></p>
<p class="has-line-data" data-line-start="30" data-line-end="32"><strong>Step 6:</strong> To start your work, work the directory that contains the project files.<br>
<code>cd HNG_storm-task</code></p>
<p class="has-line-data" data-line-start="33" data-line-end="34"><strong>Step 7:</strong> <code>git remote add upstream https://github.com/Seymaster/HNG_storm-task.git</code></p>
<p class="has-line-data" data-line-start="35" data-line-end="36"><strong>Step 8:</strong> <code>git pull upstream development</code></p>
<p class="has-line-data" data-line-start="37" data-line-end="39"><strong>Note:</strong> you will be on the Master branch automatically.<br>
You need to move out of the Master branch to another branch to start your work.</p>
<p class="has-line-data" data-line-start="40" data-line-end="41">To move to another branch</p>
<p class="has-line-data" data-line-start="42" data-line-end="43">Run: <code>git checkout -b script/&lt;nameOfBranch&gt;</code></p>
<p class="has-line-data" data-line-start="44" data-line-end="46">You can use any name for your branch.<br>
But for consistency and orderliness, use your slack username</p>
<p class="has-line-data" data-line-start="47" data-line-end="48"><strong>IE:</strong> &lt;nameOfBranch&gt; should be replaced with your slack username, use hypen where you will normally use space. That is if you have space in your username. I don’t think anybody does. If you do though, use hypen(-)</p>
<p class="has-line-data" data-line-start="49" data-line-end="52">For example,<br>
<code>git checkout -b script/joshua-folorunsho</code> ✅<br>
<code>git checkout -b script/joshua folorunsho</code> ❌</p>
<p class="has-line-data" data-line-start="53" data-line-end="55">Open the project file with your favourite code editor (Sublime, VSCode, Atom, etcetera).<br>
Navigate to the testScripts folder and create a new file with your slack username.exetension.</p>
<p class="has-line-data" data-line-start="56" data-line-end="60">For example:<br>
<code>__josh.js__</code><br>
<code>__josh.php__</code><br>
<code>__josh.py__</code></p>
<p class="has-line-data" data-line-start="61" data-line-end="62">For now, you can only use three different programming languages.</p>
<h3 class="code-line" data-line-start=62 data-line-end=63 ><a id="Python_PHP_and_JavaScript_62"></a>Python, PHP, and JavaScript</h3>
<p class="has-line-data" data-line-start="64" data-line-end="65">No mater how complicated your code is, your output must talic with the below format and must be logged to the console.</p>
<p class="has-line-data" data-line-start="66" data-line-end="67">&quot;Hello World, this is [firstName] [lastname] with HNGi7 ID [HNG-0000] using [PHP] for stage 2 task. <a href="mailto:joshuafolorunsho01@gmail.com">joshuafolorunsho01@gmail.com</a>&quot;</p>
<p class="has-line-data" data-line-start="68" data-line-end="69">The square brackets are very <strong><em>Important</em></strong>. Don’t leave them out.</p>
<p class="has-line-data" data-line-start="70" data-line-end="72">If you have Xampp or Wampp on your local machine, you can test your code to see if it works(pass) or not(fail).<br>
If you don’t have any on your machine. You can watch this youtube video (<a href="https://www.youtube.com/watch?v=TjFRTkw6GDQ">https://www.youtube.com/watch?v=TjFRTkw6GDQ</a>)</p>
<p class="has-line-data" data-line-start="73" data-line-end="74">Once you are done writing the script and you have tested that everything is working perfectly fine (I.e your code has passed). (Optional: If you could make a screenshot of it and attach your pull request)</p>
<p class="has-line-data" data-line-start="75" data-line-end="77">Run: <code>git add .</code><br>
Run: <code>git commit -m &quot;chore: create script&quot;</code></p>
<p class="has-line-data" data-line-start="78" data-line-end="79"><code>git push origin script/username</code></p>
<p class="has-line-data" data-line-start="80" data-line-end="82">In my case, it would be<br>
<code>git push origin script/__josh__</code> - (<strong><em>Notice how it ends with the branch you created earlier</em></strong>).</p>
<p class="has-line-data" data-line-start="83" data-line-end="84"><strong>Creating Pull requests</strong></p>
<p class="has-line-data" data-line-start="85" data-line-end="86">PR === Pull request</p>
<p class="has-line-data" data-line-start="87" data-line-end="88">Go to <a href="http://github.com">github.com</a>, locate the repository you forked in <strong><em>step 1</em></strong></p>
<p class="has-line-data" data-line-start="89" data-line-end="90">As soon as you get there, you are going to see a green ‘compare and create a pull request’</p>
<p class="has-line-data" data-line-start="91" data-line-end="92">Click on it, and type your message, click on create pull request. I will merge as soon as possible</p>
<p class="has-line-data" data-line-start="93" data-line-end="94">If you have any more questions if check out this resource -&gt; <a href="https://www.youtube.com/watch?v=HbSjyU2vf6Y">https://www.youtube.com/watch?v=HbSjyU2vf6Y</a> or find my username and chat me up on slack <code>__josh__</code>. I will try and reply ASAP. Thanks!</p>