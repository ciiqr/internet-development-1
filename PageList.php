<?php
/*
	Name:		 PageList
	Author:		 William Villeneuve
	FileName:	 PageList.php
	Date Created: 02/08/2014
	Description: Displays an unordered list of links and sublinks
*/

function _printLink($linkName, $linkLocation="") 
{
	// Get the fileName
	global $filename;
	// The current page is styled with the css class active
	if ($filename == basename($linkLocation))
		echo '<a class="active" href="', $linkLocation, '">', $linkName, '</a>';
	else
		echo '<a href="', $linkLocation, '">', $linkName, '</a>';
}

class PageList
{
	// The Location it refers to (ex. "http://google.ca")
	private $location;

	// The title to be displayed as the link
	private $title;

	// Children Page List Items
	public $children;

	public function __construct($title, $location)
	{
		// Initalize Location & Title
		$this->location = $location;
		$this->title = $title;

		// Get the rest of the arguments(if any) and add as children
		// Removes the first 2 items from the array because they are the location and the title
		$this->children = array_splice((func_get_args()), 2);
	}

	public function hasChildren()
	{
		// If they array is not empty then there are children
		return !empty($this->children);
	}

	public function isRoot()
	{
		// If the title and the location are both null then assume root
		return $this->title == null && $this->location == null;
	}

	public function printList()
	{
		// Has Children
		if ($this->hasChildren())
		{
			// Root Item starts list but has no link
			if ($this->isRoot())
				print "<ul>";
			else // Sub List so: Start item, Print link and Start list
			{
				// Open List Item
				print "<li>";

				// Print Page Link
				_printLink($this->title, $this->location);

				// Open List
				print "<ul>";
			}

			// Print Each Sub Item
			foreach ($this->children as $page)
				$page->printList();

			// Close List
			print "</ul>";

		}
		else // No Children, 
		{
			// Open List Item
			print "<li>";

			// Print Page Link (<a href="./lab1.php">Lab 1</a>)
			_printLink($this->title, $this->location);
		}

		// As Long as not the root end the list item
		if (! $this->isRoot())
			// Close List Item
			print "</li>";
	}

	// public static function createRootPageList(...)
	// {
	// 	return new static(null, null, ...);
	// }
}
?>