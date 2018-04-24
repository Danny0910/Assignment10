<?php

namespace SilexBlog;

class Post
{
    private $id, $author, $title, $created_date, $modified_date, $body;
    // $persisted is true when the data is saved and up-to-date in the database.
    private $persisted = false;

    // Basic constructor.  Pass null for $id when creating a new post that has not been persisted yet.
    public function __construct($id, $author, $title, $created_date, $modified_date, $body) {
        $this->id = $id;
        $this->author = $author;
        $this->title = $title;
        $this->created_date = $created_date;
        $this->modified_date = $modified_date;
        $this->body = $body;
    }
    
    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param null $author
     */
    public function setAuthor($author)
    {
        if($this->author != $author) {
            $this->author = $author;
            $this->setPersisted(false);
        }

    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param null $title
     */
    public function setTitle($title)
    {
        if($this->title != $title) {
            $this->title = $title;
            $this->setPersisted(false);
        }
    }

    /**
     * @return string
     */
    public function getCreatedDate()
    {
        return $this->created_date;
    }

    /**
     * @param null $created_date
     */
    public function setCreatedDate($created_date)
    {
        if($this->created_date != $created_date) {
            $this->created_date = $created_date;
            $this->setPersisted(false);
        }
    }

    /**
     * @return string
     */
    public function getModifiedDate()
    {
        return $this->modified_date;
    }

    /**
     * @param null $modified_date
     */
    public function setModifiedDate($modified_date)
    {
        if($this->modified_date != $modified_date) {
            $this->modified_date = $modified_date;
            $this->setPersisted(false);
        }
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param null $id
     */
    public function setId($id)
    {
        if($this->id != $id) {
            $this->id = $id;
            $this->setPersisted(false);
        }
    }


    /**
     * @return string
     */

    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param null $body
     */
    public function setBody($body)
    {
        if($this->body!=$body) {
            $this->body = $body;
            $this->setPersisted(false);
        }
    }

    /**
     * @return bool
     */
    public function getPersisted()
    {
        return $this->persisted;
    }

    /**
     * @param null $persisted
     */
    public function setPersisted($persisted)
    {
        $this->persisted = $persisted;
    }
}