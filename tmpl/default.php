<?php defined('_JEXEC') or die('Restricted access'); ?>
<?php
$linkto = $this->params->get( 'coursessolink_linkto' );
$courseid = $this->params->get( 'coursessolink_courseid' );
if ($linkto == 'moodle')
{
    if ($default_itemid)
        $itemid = $default_itemid;
    else
        $itemid = JoomdleHelperContent::getMenuItem();
}
else if ($linkto == 'detail')
{
        $itemid = JoomdleHelperContent::getMenuItem();

        if ($joomdle_itemid)
            $itemid = $joomdle_itemid;
}
else
{
        $itemid = JoomdleHelperContent::getMenuItem();

        if ($joomdle_itemid)
            $itemid = $joomdle_itemid;
        if ($courseid)
            $itemid = $courseid;
}

$linkstarget = $this->params->get( 'linkstarget' );
if ($linkstarget == "new")
	 $target = " target='_blank'";
 else $target = "";
?>

<div class="joomdle-coursessolink<?php echo $this->pageclass_sfx;?>">
    <?php if ($this->params->get('show_page_heading', 1)) : ?>
    <h1>
    <?php echo $this->escape($this->params->get('page_heading')); ?>
    </h1>
    <?php endif; ?>

    <div class="joomdle_coursessolink">
    <?php
    $lang = JoomdleHelperContent::get_lang ();

    $name = JText::_ (COM_JOOMDLE_SITEFRONTPAGE);
    if($courseid > 1) {
        $course_info = JoomdleHelperContent::getCourseInfo((int)$courseid);
        $name = $course_info['fullname'];
    }
    
    if ($linkto == 'moodle')
    {
        $redirect_url = $this->jump_url."&mtype=course&id=".$courseid."&Itemid=$itemid";
        if ($lang)
            $redirect_url .= "&lang=$lang";
        echo "<a $target href=\"$link\">".$name."</a>";
        $app = JFactory::getApplication();
        $app->redirect($redirect_url);
    }
    else if ($linkto == 'detail')
    {
        // Link to detail view
        $redirect_url = JRoute::_("index.php?option=com_joomdle&view=detail&course_id=".$courseid.':'.JFilterOutput::stringURLSafe($name)."&Itemid=$itemid");
        echo "<a href=\"".$redirect_url."\">".$name."</a>";
        
    }
    else
    {
        // Link to course view
        $redirect_url = JRoute::_("index.php?option=com_joomdle&view=course&course_id=".$courseid.':'.JFilterOutput::stringURLSafe($name)."&Itemid=$itemid");
        echo "<a href=\"".$redirect_url."\">".$name."</a>";
    }
    ?>
    </div>
</div>
