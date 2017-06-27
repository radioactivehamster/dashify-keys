<?php

namespace RadHam;

class DashifyKeys
{
    /**
     * Convert underscores in a property to hyphens.
     *
     * @param string $property
     * @return string
     */
    private static function dashify(string $property): string
    {
        return str_replace('_', '-', $property);
    }

    /**
     * Convert underscores in an array's properties to hyphens.
     *
     * @param array $collection
     * @return array
     */
    public static function factory(array $collection = []): array
    {
        return collect($collection)->mapWithKeys(function ($value, $property) {
            return [self::dashify($property) => $value];
        })->toArray();
    }
}
