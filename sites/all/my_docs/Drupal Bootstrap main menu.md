# Drupal Bootstrap issues

Plan: create a clone of the Voscur site using a Bootstrap sub theme

## Main menu

When I first created and enabled my (minimal) Bootstrap sub theme, the main navigation that I had was appearing outside the Bootstrap theme's navigation region. In fact the problem was that the navigation region didn't exist in my sub theme, and the remedy for that was to add to the sub them info file a section specifically naming the regions (copied from the main bootstrap info file). Then I was able to put the main navigation menu into that region. However...

I found (was reminded) that previously I'd used the nice menus module to create a main nav with drop downs - because this doesn't come baked in to the themes I used previously. Bootstrap does have drop down functionality so this makes the additional menu that I created redundant. (So I deleted that block in the interests of tidiness - er, no I didn't because it doesn't seem to be possible. In the blocks page it's actually quite unusual to see a delete link. You can only delete blocks you created yourself manually and not ones created by any module. There just doesn't seem to be any way of deleting a Nice Menu menu short of uninstalling the module - if that even works. Where are nice menu/superfish settings and vars stored? In the *variable* table I guess?)

The main nav now appears in the right place but with title and not properly styled (vertical not horizontal). (This was a UI option in nice menus)

To get rid of the title you have to find the menu in Blocks then configure and make title '<none>'.



This is basically ~~hopeless~~ very difficult to figure out. I can see why Circle hard-coded the main nav for bootstrap. Seems like the bootstrap theme injects html on the menu but misses a crucial class i.e. you need the ul to have class navbar-nav and this isn't added. 

Need to make Bootstrap use not block.tpl.php but something else - maybe...

Where is it defined what template is called?

Wait - I'm getting somewhere: created block--navigation.tpl.php and that is getting picked up...

Success! In the Bootstrap theme we have /menu/menu-tree.func.php which defines how menus are constructed. I have to make a local copy in my subtheme and then rename the functions according to the subtheme name. There are three functions for menus and for some reason it's the first one bootstrap_menu_tree() that is being used and not either of the other two bootstrap_menu_tree\_\_primary() or bootstrap_menu_tree\_\_secondary(). For some reason that first function wasn't adding the navbar-nav class. So I added that class and then it works, but I do still need to understand when each one is invoked and why...