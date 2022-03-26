<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Development structure</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <header class="header sticky">
    <div class="header__title">
        <h1>My site</h1>
      </div>
      <div class="header__icons">
        <i data-feather="bluetooth"></i>
        <i data-feather="bar-chart"></i>
        <i data-feather="bell"></i>
        <i data-feather="mail"></i>
      </div>        
    </header>
    <nav class="nav">
      <a href="#" class="nav__mobileToggle"><i data-feather="menu"></i></a>
      <a href="#" class="nav__item">Home</a>
      <a href="#" class="nav__item">About</a>
      <a href="#" class="nav__item">Portfolio</a>
      <a href="#" class="nav__item">Contact</a>
    </nav>
    <img src="https://picsum.photos/seed/picsum/400/300" alt="Random image" class="responsiveImage" />
    <main class="container">
        <section class="loremIpsum grid one-column"></section>
        <section class="charts">            
            <article class="grid one-column charts__table"></article>
            <div class="grid two-columns">
                <article class="charts__bar"></article>
                <article class="charts__indicators"></article>
            </div>
        </section>
        <section class="whatAndWhy grid two-columns">
            <article class="whatAndWhy__what">
                <h2>What is it?</h2>
                <p>It is a way of creating applications which aims to take advantage of 2 really useful technologies:</p>
                <ul>
                    <li>PHP</li>
                    <li>JavaScript</li>
                </ul>
            </article>
            <aside class="whatAndWhy__why">
                <h2>Why do it?</h2>
                <p>PHP is a great way of coding for the web. Includes, requires and classes, coupled with excellent database access make it a rapid web development language.</p>
                <p>JavaScript has opened the door to improving rapid development through packaging and bundling. It also provides excellent asynchronous facilities.</p>
            </aside>
        </section>
        <section class="how grid two-columns">
            <article class="how__willItHelp">
                <h2>How will it help?</h2>
                <p>It will allow developers to work quickly, freely and to standards which make it ideal for working with other developers.</p>
            </article>
            <aside class="how__isItStructured">
                <h2>How is it structured?</h2>
                <p>There are 3 main areas within the directory structure:</p>
                <ul>
                    <li>Root: Contains configuration files, node modules, and process documentation.</li>
                    <li>src: Contains source files written by the developer.</li>
                    <li>dist: Contains files needed for presenting the site to the web. This includes any libraries needed for the site to run.</li>
                </ul>
            </aside>              
        </section>
        <section class="setup grid two-columns">
            <article class="setup__elements">
                <h2>The elements</h2>
                <ul>
                    <li>NPM: Node package manager. This allows us to get the JavaScipt libraries we need. It also provides a mechanism for running the application from the JavaScript perspective.</li>
                    <li>Webpack: Will bundle the JavaScript and CSS files, thus reducing the number of HTTP requests made by the user.</li>
                    <li>Gulp: Will run the tasks such as Webpack so that the developer does not have to keep coming back to the command-line.</li>
                    <li>Composer: Provides access to thousands of PHP libaries and organises thier dependencies so developers don't have to.</li>
                    <li>Git: Source control software.</li>
                </ul>
            </article>
            <aside class="setup__inPractice">
                <h2>How do they work together?</h2>
                <h3>Start</h3>
                <p>At the beginning of each development session the developer launches the environment through the command:</p>                
                <pre>./start</pre>
                <p>Start runs 2 tasks:</p>
                <ul>
                    <li>Gulp</li>
                    <li>NPM</li>
                </ul>
                <h3>Gulp</h3>
                <p>Gulp is a task runner. It performs the job of watching PHP, image and config files.</p>
                <h3>NPM</h3>
                <p>NPM looks at package.json. It installs any missing packages to the 'node_modules' directory.</p>
                <p>It performs the job of watching SCSS files. It then, using webpack, packs all the JS and CSS into bundles.</p>
            </aside>
        </section>
        <section class="standards grid two-columns">
            <article class="standards__what">
                <h2>The standards</h2>
                <ul>
                    <li><a href="http://getbem.com/" target= "_blank">BEM</a>: Creates a new standard which all developers can use to create CSS. The CSS will also have the flexibility of <a href="https://sass-lang.com/" target="_blank">SASS</a>.</li>
                    <li><a href="https://www.w3schools.com/Js/js_es6.asp" target="_blank">ES6</a>: Otherwise known as ECMAScript 6. Otherwise known as ES2015. Babel will convert it to previous versions of JavaScript automatically in order that the ES6 code will work in older browsers.</li>
                    <li><a href="https://pear.php.net/manual/en/standards.php" target="_blank">PEAR PHP</a></li>
                </ul>
            </article>
            <aside class="standards__why">
                <h2>Why these standards?</h2>
                <p>The standards should be used so that Developers can easily find their way to code. Developers should also find the code easy to read.</p> 
            </aside>
        </section>
        <section class="using grid two-columns">
            <article class="using__gettingStarted">
                <h2>How to get started</h2>
                <h3>Pre-requisites</h3>
                <table class="preRequisites">
                    <thead>
                        <tr>
                            <th>Git</th>
                            <th>Composer</th>
                        </tr>
                    </thead>                    
                    <tbody>
                        <tr>
                            <td><a href="https://git-scm.com/downloads" target="_blank">How to install</a></td>
                            <td><a href="https://getcomposer.org/doc/00-intro.md" target="_blank">How to install</a></td>
                        </tr>
                    </tbody>
                </table>
                <table class="preRequisites">
                    <thead>
                        <tr>
                            <th>NPM</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="https://www.npmjs.com/get-npm" target="_blank">How to install</a></td>
                        </tr>
                    </tbody>
                </table>
            </article>
            <aside class="using__working">
                <h2>How to work</h2>                
                <h3>PHP coding/saving before adding to git</h3>
                <pre>.\start</pre>
                <h3>PHP coding/saving including to git</h3>
                <pre>.\git "Example message"</pre>
                <p>A flow chart explaining how the process should work can be found at <a href="docs/devprocess.pdf" target="_blank">this PDF</a>.
            </aside>
        </section>
        <section class="supplimentary grid two-columns">
            <article class="supplimentary__finalHelp">
                <h2>When you've finished</h2>
                <pre>
                    ./end
                </pre>
            </article>
            <aside class="supplimentary__codeExamples">
                <h2>PHP examples</h2>
                <?php
                include_once 'php/includes/include.inc.php';
                require_once 'php/requires/require.req.php';
                requireTest();
                dbTest();
                require_once 'php/classes/test.cla.php';
                new test;
                ?>
                <h3>Applying PHP frameworks</h3>
                <p>PHP frameworks can be applied through "composer.json". Just add the entries followed by:</p>                
                <pre>
                    ./end
                    ./start
                </pre>
                <p>The rest should be done by the dev structure environment. It may take a little time since new packages are being added to the container.</p>
            </aside>
        </section>        
    </main>
    <footer class="footer sticky">
        <div class="container">
            <p>This is the footer &copy;</p>
        </div>        
    </footer>
    <script type="text/javascript"  src="js/bundle.js"></script>
</body>
</html>