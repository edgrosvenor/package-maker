# (Mostly) Vanilla Laravel
Because I TDD my Laravel packages, I lean pretty heavily on [Orchestra Testbench](https://github.com/orchestral/testbench) to ensure that they behave the way I expect them to. But it usually make sense to give them a good once
 over in a real live Laravel site. This is the base Laravel installation I'm currently using.

I keep all my packages at `~/Packages/{vendor}/{package}` while I'm working on them. So if I'm working with one of my
 own packages, it might sit at `~/Packages/edgrosvenor/stubby` and a work package might sit at `~/Packages
 /exactsports/coachpackage`. I don't want to have to muck about in my composer.json file too much, so I just do this:

```json
  "repositories": [
         {
            "type": "path",
            "url": "../../Packages/*/*"
        }
    ]
```
This lines up with a relative path from where I keep my sites at `~/Sites`. I can then require the packages I'm working on as normal, whether in the require or require-dev block in composer or via the command line.

```json
    "require": {
        "edgrosvenor/stubby": "dev/master",
        "exactsports/coackpackage": "dev/master"
} 
```
Even if these packages are published to packagist, they'll be pulled in from the local path instead. That means that
 I can fork an open source package, clone the fork to my computer, do the work required to fix a bug or add a feature
 , make sure my code is covered by passing tests, and make sure it plays nicely in a live Laravel application easily
  before submitting a pull request.
  
 ### My Plans For This Repository
 
 Over time, I'm going to build out additional documentation here to help guide aspiring package developers. I'll also
  add some console commands and other utility tools to speed up the package development process.
