Drupal welcome user and logout

Having created a Voscur Staff user, I wanted a 'Welcome staff name' message and a logout link. These don't come automatically - you get them for admin users because they are part of the admin toolbar (and you get a login box for non-authenticated users).

Two ways of doing this that I know of:

1. add php code to the template file, or a separate file that you include somehow
2. use a view: https://www.drupal.org/forum/support/post-installation/2008-01-24/how-can-i-display-a-welcome-line-of-text#comment-8499219

On the principle that you should do things via the UI if you can, the second option seems best, but this is what you end up with:

```html
<div id="block-views-user-welcome-block" class="block block-views">
 <h2 class="element-invisible">gertrude@voscur.org</h2> 
  <div class="content">
    <div class="view view-user-welcome view-id-user_welcome view-display-id-block view-dom-id-939d661de9d694cee0f42030d83f6d35">
      <div class="view-content">
        <div class="views-row views-row-1 views-row-odd views-row-first views-row-last">
        </div>     
        <div class="views-field views-field-name">
         <span class="field-content">Welcome <span class="username" xml:lang="" about="/drupal7/users/gertrudevoscurorg" typeof="sioc:UserAccount" property="foaf:name" datatype="">gertrude@voscur.org</span></span>  
         </div>  
       </div>
     </div>  
  </div>  
 </div>
</div>
```

...which is frankly ridiculous. Plus as it comes the styling is all over the place so you still have to fix that.

That makes the first option rather more attractive (option two would obvs be the way if you want a profile page or something, but seems way over complicated for a simple welcome message).

NB a logout link can just be done with a block of HTML 