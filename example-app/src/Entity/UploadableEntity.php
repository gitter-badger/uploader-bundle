<?php


namespace ExampleApp\Entity;


class UploadableEntity
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \SplFileInfo|string|null
     */
    protected $fileField;

    /**
     * @var string|null
     */
    protected $uriField;

    /**
     * @var \SplFileInfo|null
     */
    protected $fileInfoField;

    public function __construct(\SplFileInfo $file)
    {
        $this->fileField = $file;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFileField()
    {
        return $this->fileField;
    }

    public function setFileField($fileField)
    {
        $this->fileField = $fileField;
    }

    public function getUriField()
    {
        return $this->uriField;
    }

    public function setUriField($uriField)
    {
        $this->uriField = $uriField;
    }

    public function getFileInfoField()
    {
        return $this->fileInfoField;
    }

    public function setFileInfoField(\SplFileInfo $fileInfoField)
    {
        $this->fileInfoField = $fileInfoField;
    }

    public function toArray()
    {
        return [
            'file' => $this->fileField ? (string)$this->fileField : null,
            'uri' => $this->uriField ? (string)$this->uriField : null,
            'fileInfo' => $this->fileInfoField ? (string)$this->fileInfoField : null,
        ];
    }

    public function __toString()
    {
        return (string)$this->fileField;
    }
}