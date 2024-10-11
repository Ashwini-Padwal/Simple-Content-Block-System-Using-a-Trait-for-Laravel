<?php

namespace App\Traits;
use App\Models\ContentBlock;

trait HasContentBlocks
{
    public function contentBlocks()
    {
        return $this->morphMany(ContentBlock::class, 'blockable');
    }

    public function addContentBlock($type, $content)
    {
        return $this->contentBlocks()->create([
            'type' => $type,
            'content' => $content,
        ]);
    }
}
